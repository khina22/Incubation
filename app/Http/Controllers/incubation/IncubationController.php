<?php

namespace App\Http\Controllers\incubation;
use App\Models\incubation\LoginModel;
use App\Models\incubation\MentorsModel;
use App\Models\incubation\EventModel;
use App\Models\incubation\AdvisoryBoardModel;
use App\Models\incubation\IncubateeModel;
use App\Models\incubation\FeedbackModel;
use App\Models\incubation\StakeholderModel;
use App\Models\incubation\CoachingModel;
use App\Models\incubation\ApplicationModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;
class IncubationController extends Controller
{
    public function login(){
        return view('pages/login');
    }

    public function userlogin(Request $request)
    {
    $login_data = [
        'email'    => $request->email,
        'password' => $request->password,
    ];

    // Check if the email and password combination exists in the database
    $admin = LoginModel::where('email', $login_data['email'])
        ->where('password', $login_data['password'])
        ->first();

    if ($admin) {
        // Email and password combination exists, redirect the user to the desired location
        return redirect()->away('pages/admindashboard');
    } else {
        // Email and password combination does not exist in the database, handle the error accordingly
        // For example, you can return an error message or redirect the user back to the login page with an error indicator
        return redirect()->back()->with('error', 'Invalid email or password');
    }
}
// Admin dashboard route
public function admindashboard()
{
    return view('pages/admindashboard');
}

public function logout(Request $request)
{
    Auth::logout();
    return redirect()->away('/');
}

        //get into mentor page
    public function mentors(){
        return view ('pages/mentors');
    }
    
        // to display in datbase
    public function mentorsadd(Request $request)
    {
        $files = $request->profile_pic;
        $file_name='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $profile_pic = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $profile_pic);
        }

        $mentors_data = [
            'name'          => $request->name,
            'designation'   => $request->designation,
            'affiliation'   => $request->affiliation,
            'pro_pic'       => $profile_pic,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($mentors_data);
        MentorsModel::create($mentors_data);
        return redirect()->route('listmentors');
    }

        //to retrieve mentors data in /
    public function mentorsretrieve(){
        $mentors_data=MentorsModel::get();
        return view('pages/mentorsretrieve')->with (compact('mentors_data'));
    }

     // list mentors in admindashboard 
     public function listmentors(){
        $mentors_data=MentorsModel::get();
        //dd($mentors_data);
        return view ('pages/listmentors')->with(compact('mentors_data'));
    }

        //get into event page
    public function event(){
        return view ('pages/event');
    }

        //display in database
    public function eventpost(Request $request)
    {
        $files = $request->event_pic;
        $event_pic='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $event_pic = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $event_pic);
        }
        $event_data = [
            'title'          => $request->title,
            'description'    => $request->description,
            'date'          => $request->date,
            'venue'         => $request->venue,
            'organizer'     => $request->organizer,
            'pro_pic'       => $event_pic,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($event_data);
        EventModel::create($event_data);
        return redirect()->route('listevent');
    }

        //retrieve event data
    public function eventretrieve(){
        $event_data=EventModel::get();
        return view('pages/eventretrieve')->with (compact('event_data'));
    }

    // list event in admindashboard 
    public function listevent(){
        $event_data=EventModel::get();
        //dd($event_data);
        return view ('pages/listevent')->with(compact('event_data'));
    }

      //get into advisory page
      public function advisoryboard(){
        return view ('pages/advisoryboard');
    }
    
        //display in database
    public function advisorypost(Request $request)
    {
        $files = $request->advisory_pic;
        $advisory_pic='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $advisory_pic = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $advisory_pic);
        }
        $advisory_data = [
            'name'          => $request->name,
            'designation'   => $request->designation,
            'affiliation'   => $request->affiliation,
            'pro_pic'       => $advisory_pic,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($mentors_data);
        AdvisoryBoardModel::create($advisory_data);
        return redirect()->route('listadvisory');
    }

        //retrieve advisory data
    public function advisoryretrieve(){
        $advisory_data=AdvisoryBoardModel::get();
        return view('pages/advisoryretrieve')->with (compact('advisory_data'));
    }

        //retrieve in admindashboard  
    public function listadvisory(){
        $advisory_data=AdvisoryBoardModel::get();
        //dd($advisory_data);
        return view ('pages/listadvisory')->with(compact('advisory_data'));
    }

    //get into incubatees page
    public function incubatees(){
        return view ('pages/incubatees');
    }
    
    //display in database
    public function incubateepost(Request $request)
    {
        $files = $request->profile_pic;
        $profile_pic='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $profile_pic = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $profile_pic);
        }

        $incubatee_data = [
            'name'          => $request->name,
            'contact_no'    => $request->contact_no,
            'email'         => $request->email,
            'description'   => $request->description,
            'pro_pic'       => $profile_pic,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($mentors_data);
        IncubateeModel::create($incubatee_data);
        return redirect()->route('listincubatee');
    }

    //retrieve incubatee data
    public function incubateeretrieve(){
        $incubatee_data=IncubateeModel::get();
        return view('pages/incubateeretrieve')->with (compact('incubatee_data'));
    }

    public function listincubatee(){
        $incubatee_data=IncubateeModel::get();
        //dd($incubatee_data);
        return view ('pages/listincubatee')->with(compact('incubatee_data'));
    }

    //get into feedback page
    public function feedback(){
        return view ('pages/feedback');
    }

     //display in database
     public function feedbackpost(Request $request)
     {
         $feedback_data = [
             'name'          => $request->name,
             'contact_no'    => $request->contact_no,
             'email'         => $request->email,
             'feedback'   => $request->feedback,
             'created_by'    => 1,
             'created_at'    => date('Y-m-d h:i:s'),
             
         ];
        //dd($feedback_data);


         FeedbackModel::create($feedback_data);
         return redirect()->away('/');
     }
     
    //retrieve feedback data
    public function feedbackretrieve(){
        $feedback_data=FeedbackModel::get();
        return view('pages/feedbackretrieve')->with (compact('feedback_data'));
    }

    //get into stakeholder page
    public function stakeholder(){
        return view ('pages/stakeholder');
    }

    //display in database
    public function stakeholderpost(Request $request)
     {
        $files = $request->pro_pic;
        $pro_pic='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $pro_pic = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $pro_pic);
        }

         $stakeholder_data = [
             'email'         => $request->email,
             'organization'   => $request->organization,
             'designation'   => $request->designation,
             'pro_pic'       => $pro_pic,
             'created_by'    => 1,
             'created_at'    => date('Y-m-d h:i:s'),
             
         ];
        //dd($feedback_data);
         StakeholderModel::create($stakeholder_data);
         return redirect()->route('liststakeholder');
     }

      //retrieve stakeholder data in home page
    public function stakeholderget(){
        $stakeholder_data=StakeholderModel::get();
        return view('pages/stakeholderget')->with (compact('stakeholder_data'));
    }

       //retrieve admin page
       public function liststakeholder(){
        $stakeholder_data=StakeholderModel::get();
        return view('pages/liststakeholder')->with (compact('stakeholder_data'));
    }

       //get into coaching page
       public function coaching(){
        return view ('pages/coaching');
    }

     //display in database
     public function coachingpost (Request $request)
     {
        $files = $request->pro_pic;
        $pro_pic='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $pro_pic = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $pro_pic);
        }
         $coaching_data = [
             'pic'                => $pro_pic,
             'coachingtools'    => $request->coaching,
             'facilitytools'    => $request->designation,
             'created_by'       => 1,
             'created_at'       => date('Y-m-d h:i:s'),
         ];
       // dd($coaching_data);
         CoachingModel::create($coaching_data);
         return redirect()->route('listcoaching');
     }

        // retrieve and get into home page
     public function coachingretrieve(){
        $coaching_data=CoachingModel::get();
        return view('pages/coachingretrieve')->with (compact('coaching_data'));
    }

     //get into coaching page
     public function listcoaching(){
        $coaching_data=CoachingModel::get();
        return view('pages/listcoaching')->with (compact('coaching_data'));
    }

     //get into feedback page
     public function application(){
        return view ('pages/application');
    }

    public function applicationpost (Request $request)
     {
         $application_data = [
            'name'              => $request->name,
            'email'    => $request->email,
            'contact_no'    => $request->contact_no,
            'business_title'    => $request->business_title,
            'description'    => $request->description,
            'potential_customers'    => $request->potential_customers,
            'competetors'    => $request->competitors,
            'survey'    => $request->survey,
            'created_by'       => 1,
            'created_at'       => date('Y-m-d h:i:s'),
            
         ];
        //dd($application_data);
         ApplicationModel::create($application_data);
         // Set success message in session
         $request->session()->flash('success', 'Application submitted successfully!');
         return redirect()->away('/');
     }

      //retrieve applicant details data in admindashboard
      public function applicationretrieve(){
        $application_data=ApplicationModel::get();
        return view('pages/applicationretrieve')->with (compact('application_data'));
    }

      public function delete_mentors($id){
        MentorsModel::where('id',$id)->delete();
        return redirect()->away('/listmentors');
    }

    public function delete_event($id){
        EventModel::where('id',$id)->delete();
        return redirect()->away('/listevent');
    }

    public function delete_advisory($id){
        AdvisoryBoardModel::where('id',$id)->delete();
        return redirect()->away('/listadvisory');
    }

    public function delete_incubatee($id){
        IncubateeModel::where('id',$id)->delete();
        return redirect()->away('/listincubatee');
    }

    public function delete_stakeholder($id){
        StakeholderModel::where('id',$id)->delete();
        return redirect()->away('/liststakeholder');
    }

    public function delete_coaching($id){
        CoachingModel::where('id',$id)->delete();
        return redirect()->away('/listcoaching');
    }

    public function edit_mentors($id){
        $data= MentorsModel::where('id',$id)->first();
        return view ('edit/editmentors')->with(compact('data'));
    }

    public function update_mentors(Request $request){
        if (file_exists(public_path('profile_pic/'.$request->existing_image))) {
            File::delete('profile_pic/'.$request->existing_image);
        }
        $files = $request->profile_pic;
        $file_name='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $file_name = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $file_name);
        }

        $data = [
            'name'          => $request->name,
            'designation'   => $request->designation,
            'affiliation'   => $request->affiliation,
            'pro_pic'       => $file_name,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($mentors_data);
        $mentor_id=$request->record_id;
        MentorsModel::where('id', $mentor_id)->update($data);
        return redirect()->route('listmentors');
    }

    public function edit_event($id){
        $data= EventModel::where('id',$id)->first();
        return view ('edit/editevent')->with(compact('data'));
    }

    public function update_event(Request $request){
        if (file_exists(public_path('event_pic/'.$request->existing_image))) {
            File::delete('event_pic/'.$request->existing_image);
        }
        $files = $request->file_name;
        $file_name='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $file_name = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $file_name);
        }

        $data = [
            'title'          => $request->title,
            'description'    => $request->description,
            'date'          => $request->date,
            'venue'         => $request->venue,
            'organizer'     => $request->organizer,
            'pro_pic'       => $file_name,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
        ];
       //dd($event_data);
        $event_id=$request->record_id;
        EventModel::where('id', $event_id)->update($data);
        return redirect()->route('listevent');
    }

        //to edit advisory board
    public function edit_advisory($id){
        $data= AdvisoryBoardModel::where('id',$id)->first();
        return view ('edit/editadvisory')->with(compact('data'));
    }

    public function update_advisory(Request $request){
        if (file_exists(public_path('profile_pic/'.$request->existing_image))) {
            File::delete('profile_pic/'.$request->existing_image);
        }
        $files = $request->profile_pic;
        $file_name='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $file_name = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $file_name);
        }

        $data = [
            'name'          => $request->name,
            'designation'   => $request->designation,
            'affiliation'   => $request->affiliation,
            'pro_pic'       => $file_name,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($mentors_data);
        $advisory_id=$request->record_id;
        AdvisoryBoardModel::where('id', $advisory_id)->update($data);
        return redirect()->route('listadvisory');
    }

       //to edit incubatees
       public function edit_incubatees($id){
        $data= IncubateeModel::where('id',$id)->first();
        return view ('edit/editincubatees')->with(compact('data'));
    }

    public function update_incubatees(Request $request){
        if (file_exists(public_path('profile_pic/'.$request->existing_image))) {
            File::delete('profile_pic/'.$request->existing_image);
        }
        $files = $request->profile_pic;
        $file_name='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $file_name = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $file_name);
        }

        $data = [
            'name'          => $request->name,
            'email'   => $request->email,
            'contact_no'   => $request->contact_no,
            'description'   => $request->description,
            'pro_pic'       => $file_name,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($incubatee_data);
        $incubatee_id=$request->record_id;
        IncubateeModel::where('id', $incubatee_id)->update($data);
        return redirect()->route('listincubatee');
    }

     //to edit stakeholder
     public function edit_stakeholder($id){
        $data= StakeholderModel::where('id',$id)->first();
        return view ('edit/editstakeholder')->with(compact('data'));
    }

    public function update_stakeholder(Request $request){
        if (file_exists(public_path('profile_pic/'.$request->existing_image))) {
            File::delete('profile_pic/'.$request->existing_image);
        }
        $files = $request->profile_pic;
        $file_name='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $file_name = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $file_name);
        }

        $data = [
            'email'          => $request->email,
            'organization'   => $request->organization,
            'designation'   => $request->designation,
            'pro_pic'       => $file_name,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($stakeholder_data);
        $stakeholder_id=$request->record_id;
        StakeholderModel::where('id', $stakeholder_id)->update($data);
        return redirect()->route('liststakeholder');
    }

     //to edit coaching
     public function edit_coaching($id){
        $data= CoachingModel::where('id',$id)->first();
        return view ('edit/editcoaching')->with(compact('data'));
    }

    public function update_coaching(Request $request){
        if (file_exists(public_path('profile_pic/'.$request->existing_image))) {
            File::delete('profile_pic/'.$request->existing_image);
        }
        $files = $request->profile_pic;
        $file_name='';
        $file_store_path =  'profile_pic';
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, TRUE);
            }
            $file_name = time() . '_' . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . '/' . $file_name);
        }

        $data = [
            'coachingtools'  => $request->coachingtools,
            'facilitytools'      => $request->facility,
            'pic'       => $file_name,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($coaching_data);
        $coaching_id=$request->record_id;
        CoachingModel::where('id', $coaching_id)->update($data);
        return redirect()->route('listcoaching');
    }


    }

