<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
   
class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
            'mobile_no' => 'required|numeric|digits:10',
            'profession' => 'required|in:electrician,dealer,partner',
            'identification_id' => 'required',
            'business_name' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input = $request->all();

        // Check if the mobile number is unique
        if (!$this->isMobileNumberUnique($input['mobile_no'])) {
            return $this->sendError('Validation Error.', ['error' => 'This mobile number is already registered.']);
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['uniq_id'] = $this->generateUniqId($input['profession']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->name;
        $success['uniq_id'] =  $user->uniq_id;
        $success['profession'] =  $user->profession;
        $success['identification_id'] =  $user->identification_id;
        $success['business_name'] =  $user->business_name;
   
        return $this->sendResponse($success, 'User register successfully.');
    }

    private function generateUniqId($profession)
     {
    // Determine the code based on the profession
    switch ($profession) {
        case 'electrician':
            $code = 'CIE';
            break;
        case 'dealer':
            $code = 'CID';
            break;
        case 'partner':
            $code = 'CIP';
            break;
        default:
            $code = 'UNK'; // Handle unknown professions as needed
         }

          // Generate a unique ID (e.g., incrementing number)
          $nextId = User::where('profession', $profession)->count() + 1;

          // Pad the ID with leading zeros
          $code .= str_pad($nextId, 3, '0', STR_PAD_LEFT);

         return $code;
     }
     private function isMobileNumberUnique($mobileNumber)
      {
         return !User::where('mobile_no', $mobileNumber)->exists();
      }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
}