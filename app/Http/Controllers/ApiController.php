<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Video;
use App\Models\Article;
use App\Models\Youtube_video;
use App\Models\Question;
use App\Models\Question_an;
use App\Models\Comment;
use App\Models\Device;
use App\Models\Notification;
use App\Models\Counter;

class ApiController extends Controller
{
   protected $stopOnFirstFailure = true;
    public function login(Request $request){
     $email=$request->email;
     $password=$request->password;
    
     $str=array();
     if(empty($email) || empty($password)){
         $str['status']=false;
         $str['message']="حقول الإدخال الفارغة";
         return $str;
     }else{
          $users = User::all()->where('email',$email);
        if(!empty($users) AND count($users)!=0){
          
           $user = User::select('id','name', 'email', 'phone','pic')->where('email',$email)->where('password',$password)->get();
           if(!empty($user) AND count($user)!=0){
              
              $str['status']=true;
         $str['data']=$user[0];
         return $str;
        }else{
            $str['status']=false;
         $str['message']="كلمة مرور خاطئة";
            return $str;
        }
        }else{
            $str['status']=false;
         $str['message']="الحساب غير موجود";
            return $str;
        }
     }

}
public function register(Request $request){
    
       if (!$request->hasFile('pic')) {
     $path="";
}else{
   $path = $request->file('pic')->store('user');  
}
      $email=$request->email;
     $users = User::all()->where('email',$email);
        if(count($users)==0){
     $user_n=new User;
        $user_n->name=$request->name;
        $user_n->email=$request->email;
        // $user_n->phone=$request->phone;
        $user_n->password=$request->password;
       if($path!=""){
          $user_n->pic=$path;   
        }
        //$user_n->save();
     if($user_n->save()){
          $str['status']=true;
           $user = User::select('id','name', 'email','pic')->where('email',$email)->get();
          $str['data']=$user[0];
           return $str;
     }else{
           $str['status']=false;
              $str['message']="خطأ تقني";
               return $str;
     }
     
        }else{
            $str['status']=false;
         $str['message']="هل لديك حساب مسبق؟
";
            return $str;  
        }

}
public function update_profile(Request $request){
    
      if (!$request->hasFile('pic')) {
     $path="";
}else{
   $path = $request->file('pic')->store('user');  
}
   
      $id=$request->id;
     $user_n = User::find($id);
        if($user_n){

        $user_n->name=$request->name;
        // $user_n->phone=$request->phone;
        if($path!=""){
          $user_n->pic=$path;   
        }
        //$user_n->save();
     if($user_n->save()){
          $str['status']=true;
           $user = User::select('id','name', 'email', 'phone','pic')->where('id',$id)->get();
          $str['data']=$user[0];
           return $str;
     }else{
           $str['status']=false;
              $str['message']="خطأ تقني";
               return $str;
     }
     
        }else{
            $str['status']=false;
         $str['message']="المستخدم غير متوفر";
            return $str;  
        }

}
public function forget_password(Request $request){
    
     $email=$request->email;
       $user = User::select('id','name', 'email','password')->where('email',$email)->first();
        if($user){

        $password=$user->password;
        $name=$user->name;
    $details = [
        'title' => 'Password Reset',
        'body' => 'Hi '.$user->name.',<br>Your Password is : '.$password,
    ];
    Mail::to($email)->send(new \App\Mail\UserMail($details));
     if(true){
          $str['status']=true;
         $str['message']="تم إرسال كلمة المرور إلى بريدك الإلكتروني";
           return $str;
     }else{
           $str['status']=false;
              $str['message']="خطأ تقني";
               return $str;
     }
     
        }else{
            $str['status']=false;
         $str['message']="البريد الإلكتروني غير موجود";
            return $str;  
        }

}
public function reset_password(Request $request){
    
     $id=$request->id;
     $old_password=$request->old_password;
     $new_password=$request->new_password;
       $user = User::select('id','name', 'email','password')->where('id',$id)->where('password',$old_password)->first();
        if($user){
$user->password=$new_password;
     if($user->save()){
          $str['status']=true;
         $str['message']="إعادة تعيين كلمة المرور بنجاح";
           return $str;
     }else{
           $str['status']=false;
              $str['message']="خطأ تقني";
               return $str;
     }
     
        }else{
            $str['status']=false;
         $str['message']="كلمة المرور القديمة خاطئة!";
            return $str;  
        }

}
public function videos_list(){
     $data = Video::latest()->paginate(4);
    $str['status']=true;
          $str['data']=$data;
           return $str;
}
public function articles_list(){
    $data=Article::latest()->select('id','title','thumbnail')->paginate(5);
    $str['status']=true;
          $str['data']=$data;
           return $str;
}
public function article_detail(Request $req){
    $id=$req->id;
    if(isset($req->id)){
       $data=Article::find($id); 
       if($data){
         $str['status']=true;
           $data['description']='get_description'."?id=".$id."&type=article";
          $str['data']=$data;
       return $str;
       }else{
            $str['status']=false;
         $str['message']="لا توجد مقالات
";
            return $str;   
       }
    }else{
         $str['status']=false;
         $str['message']="حقول الإدخال الفارغة";
         return $str;
    }
    
}
public function video_detail(Request $req){
    $id=$req->id;
    if(isset($req->id)){
       $data=Video::find($id); 
       if($data){
         $str['status']=true;
          $str['data']=$data;
           return $str;
       }else{
            $str['status']=false;
         $str['message']="لا يوجد فيديوهات
";
            return $str;   
       }
    }else{
         $str['status']=false;
         $str['message']="حقول الإدخال الفارغة";
         return $str;
    }
    
}
public function youtube_list(){
    $data=Youtube_video::latest()->select('id','title','thumbnail')->paginate(4);
    $str['status']=true;
          $str['data']=$data;
           return $str;
}
public function youtube_detail(Request $req){
    $id=$req->id;
    if(isset($req->id)){
       $data=Youtube_video::find($id); 
       if($data){
         $str['status']=true;
         $data['description']='get_description'."?id=".$id."&type=video";
          $str['data']=$data;
           return $str;
       }else{
            $str['status']=false;
         $str['message']="لا يوجد فيديوهات
";
            return $str;   
       }
    }else{
         $str['status']=false;
         $str['message']="حقول الإدخال الفارغة";
         return $str;
    }
    
}


public function ans_poll(Request $req){
    $device_id=$req->device_id;
    $q_id=$req->q_id;
    $ans=$req->ans;
    $chk =DB::table('question_ans')
             ->select('id')
             ->where('q_id', $q_id)
             ->where('ans',$ans)
             ->where('device_id',$device_id)
             ->first();
        if($chk){
            $str['status']=false;
         $str['message']="تمت الاجابة مسبقا";
            return $str;
        }else{
            $quest=new Question_an;
            $quest->q_id=$q_id;
            $quest->ans=$ans;
            $quest->device_id=$device_id;
            $quest->save();
             $str['status']=true;
         $str['message']="قدمت بنجاح";
            return $str;
        
        }
}
public function comment_poll(Request $req){
    $user_id=$req->user_id;
    $q_id=$req->q_id;
    $message=$req->message;
    $chk =DB::table('users')
             ->select('status')
             ->where('id', $user_id)
             ->first();
        if($chk){
            if($chk->status==1){
           $quest=new Comment;
            $quest->q_id=$q_id;
            $quest->message=$message;
            $quest->user_id=$user_id;
            $quest->save();
             $str['status']=true;
         $str['message']="قدمت بنجاح";
            return $str;
            }else{
                $str['status']=false;
         $str['message']="المستخدم المحظور!";
            return $str;
            }
        }else{
         $str['status']=false;
         $str['message']="لم يتم العثور على المستخدم!";
            return $str;
        }
}
public function poll(Request $req){
  $questions = Question::where('status', '1')->get(); 
  if(count($questions)==0){
     $str['status']=false;
         $str['message']="No Data Found";
            return $str;
  }else{
      $data['status']=true;
        $question=$questions[0];
        $data['poll_data']['question']=$question;
        $device_id=$req->device_id;
        if($device_id){
        $anschk =DB::table('question_ans')
             ->select('ans')
             ->where('q_id', $question['id'])
             ->where('device_id',$device_id)
             ->first();
             if($anschk){
             $data['poll_data']['q_ans']=$anschk->ans;
             }else{
                $data['poll_data']['q_ans']=""; 
             }
        }else{
            $data['poll_data']['q_ans']="";
        }
        $total=0;
        for($i=1; $i<6; $i++){
           $ans =DB::table('question_ans')
             ->select(DB::raw('count(ans) as count'))
             ->where('q_id', $question['id'])
             ->where('ans',$i)
             ->first();
             $total+=$ans2[$i]=$ans->count;
        }
          for($i=1; $i<6; $i++){
            if($total==0){
                $data['poll_data']['ans'][$i]=0;
            }else{
             $data['poll_data']['ans'][$i]=($ans2[$i]/$total)*100;
        }
        }
        $data['poll_data']['total']=$total;
             
              $data['poll_data']['comments']=DB::table('comments')->join('users', 'users.id', '=', 'comments.user_id')
             ->select('users.name','comments.*')
             ->where('comments.q_id', $question['id'])->get();
      return $data;
  }
  
}
public function notifications(){
    $data=Notification::latest()->select('n_id','title','body', 'type', 'id')->paginate(10);
    $str['status']=true;
          $str['notification_data']=$data;
           return $str;
}

public function counter(Request $req){
    $counter=Counter::find(1);
    $type=$req->type;
    $counter->$type++;
    $counter->save();
    $str['status']=true;
    $str['message']="نجاح";
           return $str;
}

public function get_description(Request $req){
    $id=$req->id;
    if(isset($req->id)){
        if($req->type=="article"){
       $data=Article::find($id); }else{
        $data=Youtube_video::find($id);   
       }
       
       return $data['description'];
}else{
    return "";
}

}


}
