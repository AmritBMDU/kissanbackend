<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Controllers\Controller;
use App\Models\Reward;
use App\Models\UserReward;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class QRCodeController extends BaseController
{
    
    public function saveScannedData(Request $request)
    {
        $data = $request->input('scanned_data');
        $userId = $request->user()->id;
    
        if ($this->hasUserScanned($userId, $data)) {
            return response()->json(['message' => 'You have already scanned this QR code. No additional rewards.']);
        }
    
        // Check if the reward exists in the database
        $userRewards = $this->getUserRewards($data);
    
        if (!$userRewards) {
            return response()->json(['message' => 'Invalid QR code.']);
        }
    
        $this->markRewardAsCollected($userId, $userRewards['id'], $userRewards['points']);
    
        return response()->json(['message' => 'Scanned data saved successfully', 'rewards' => $userRewards]);
    }
    
    private function markRewardAsCollected($userId, $rewardId, $points)
    {
        Reward::where('id', $rewardId)
        ->where('status', 'active')
        ->update(['status' => 'inactive']);
    
    
    // Create a UserReward record
    $userReward = new UserReward([
        'user_id' => $userId,
        'reward_id' => $rewardId,
        'points' => $points,
    ]);
    $userReward->save();
        
        // Reward::where('id', $userRewards['id'])
        //     ->where('status', 'active') // Only mark active rewards
        //     ->update(['status' => 'inactive']);
    }
    
    private function hasUserScanned($userId, $scannedData)
    {
        // You may need to check your cache configuration to ensure it's working correctly.
        return Cache::has($this->getCacheKey($userId, $scannedData));
    }
    
    private function getUserRewards($scannedData)
    {
        $reward = null;

        Log::debug("Scanned Data: $scannedData");
        $reward = Reward::where('code_data', $scannedData)
            ->where('status', 'active')
            ->first();
    
        if ($reward) {
            return ['name' => $reward->name, 'points' => $reward->points, 'id' => $reward->id];
        }
    
        return null;
    }
    
    private function getCacheKey($userId, $scannedData)
    {
        return "user:$userId:scanned:$scannedData";
    }
    




    // for show rewards
//     public function getUserProfile(Request $request)
// {
//     $userId = $request->user()->id;

//     // Calculate the total points for the user
//     $totalPoints = UserReward::where('user_id', $userId)->sum('points');

//     // Fetch other user data as needed
//     $userData = User::find($userId);

//     return response()->json([
//         'user' => $userData,
//         'total_points' => $totalPoints,
//     ]);
// }


// *****************This line for access and sum the rewards of user*****************************
// $points = $this->getUserRewards($data)['points'];



    
}
