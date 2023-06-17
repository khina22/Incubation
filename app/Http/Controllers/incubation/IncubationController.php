<?php

namespace App\Http\Controllers\incubation;
use App\Models\incubation\LoginModel;
use App\Models\incubation\MentorsModel;
use App\Models\incubation\EventModel;
use App\Models\incubation\AdvisoryBoardModel;
use App\Models\incubation\IncubateeModel;
use App\Models\incubation\FeedbackModel;
use App\Models\incubation\StakeholderModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncubationController extends Controller
{
    public function login(){
        return view('pages/login');
    }

    public function userlogin(Request $request)
    {
        $login_data = [
            'name' => $request->username,
            'password' => $request->password,
            'created_by' => 1,
            'created_at' => date('Y-m-d h:i:s'),
            'updated_by' => 1,
            'updated_at' => date('Y-m-d h:i:s'),
        ];
        // dd($login_data);
        LoginModel::create($login_data);
        return redirect()->route('pages/admindashboard');
    }

    public function admindashboard(){
        return view ('pages/admindashboard');
    }

    public function mentors(){
        return view ('pages/mentors');
    }

    public function mentorsadd(Request $request)
    {
        $mentors_data = [
            'name'          => $request->name,
            'contact_no'    => $request->contact_no,
            'email'         => $request->email,
            'description'   => $request->description,
            'pro_pic'       => $request->profile_pic,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($mentors_data);
        MentorsModel::create($mentors_data);
        return redirect()->route('pages/admindashboard');
    }

    public function mentorsretrieve(){
        $mentors_data=MentorsModel::get();
        return view('pages/mentorsretrieve')->with (compact('mentors_data'));
    }

        //get into event page
    public function event(){
        return view ('pages/event');
    }

        //display in database
    public function eventpost(Request $request)
    {
        $event_data = [
            'title'          => $request->title,
            'description'    => $request->description,
            'date'         => $request->date,
            'venue'   => $request->venue,
            'organizer'       => $request->organizer,
            'pro_pic'       => $request->event_pic,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($event_data);
        EventModel::create($event_data);
        return redirect()->route('pages/admindashboard');
    }

        //retrieve event data
    public function eventretrieve(){
        $event_data=EventModel::get();
        return view('pages/eventretrieve')->with (compact('event_data'));
    }

      //get into advisory page
      public function advisoryboard(){
        return view ('pages/advisoryboard');
    }
    
        //display in database
    public function advisorypost(Request $request)
    {
        $advisory_data = [
            'name'          => $request->name,
            'contact_no'    => $request->contact_no,
            'email'         => $request->email,
            'description'   => $request->description,
            'pro_pic'       => $request->profile_pic,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($mentors_data);
        AdvisoryBoardModel::create($advisory_data);
        return redirect()->route('pages/admindashboard');
    }

        //retrieve advisory data
    public function advisoryretrieve(){
        $advisory_data=AdvisoryBoardModel::get();
        return view('pages/advisoryretrieve')->with (compact('advisory_data'));
    }

    //get into incubatees page
    public function incubatees(){
        return view ('pages/incubatees');
    }
    
    //display in database
    public function incubateepost(Request $request)
    {
        $incubatee_data = [
            'name'          => $request->name,
            'contact_no'    => $request->contact_no,
            'email'         => $request->email,
            'description'   => $request->description,
            'pro_pic'       => $request->profile_pic,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            
        ];
       //dd($mentors_data);
        IncubateeModel::create($incubatee_data);
        return redirect()->route('pages/admindashboard');
    }

    //retrieve incubatee data
    public function incubateeretrieve(){
        $incubatee_data=IncubateeModel::get();
        return view('pages/incubateeretrieve')->with (compact('incubatee_data'));
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
             'feedback'   => $request->description,
             'created_by'    => 1,
             'created_at'    => date('Y-m-d h:i:s'),
             
         ];
        //dd($feedback_data);
         FeedbackModel::create($feedback_data);
         return redirect()->route('pages/feedback');
     }
     
    //retrieve feedback data
    public function feedbackretrieve(){
        $feedback_data=IncubateeModel::get();
        return view('pages/feedbackretrieve')->with (compact('feedback_data'));
    }

    //get into stakeholder page
    public function stakeholder(){
        return view ('pages/stakeholder');
    }

    //display in database
    public function stakeholderpost(Request $request)
     {
         $stakeholder_data = [
             'name'          => $request->name,
             'contact_no'    => $request->contact_no,
             'email'         => $request->email,
             'organization'   => $request->organization,
             'designation'   => $request->designation,
             'created_by'    => 1,
             'created_at'    => date('Y-m-d h:i:s'),
             
         ];
        //dd($feedback_data);
         StakeholderModel::create($stakeholder_data);
         return redirect()->route('pages/stakeholder');
     }

      //retrieve stakeholder data
    public function stakeholderget(){
        $stakeholder_data=StakeholderModel::get();
        return view('pages/stakeholderget')->with (compact('stakeholder_data'));
    }


    }

