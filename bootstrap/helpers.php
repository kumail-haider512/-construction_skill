<?php
use Carbon\Carbon;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
Use App\Models\Course;

    function uploadImage($file, $path){
        $name = time().'-'.str_replace(' ', '-', $file->getClientOriginalName());
        $file->move($path,$name);
        return $path.'/'.$name;
    }
    function sendMail($data)
    {
        if (array_key_exists("file",$data)) {
            $mail = Mail::send($data['view'], ['data' => $data['data']], function ($message) use ($data) {
                $message->to($data['to'], $data['name'])->subject($data['subject'])->attach($data['file']->getRealPath(),
                [
                    'as' => $data['file']->getClientOriginalName(),
                    'mime' => $data['file']->getClientMimeType(),
                ]);
            });
        }else {
            $mail = Mail::send($data['view'], ['data' => $data['data']], function ($message) use ($data) {
                $message->to($data['to'], $data['name'])->subject($data['subject']);
            });
        }
    }

    function setting($key)
    {
        $setting = Setting::pluck('value', 'name');
        return $setting[$key] ?? '';
    }
    function get_order_no()
    {
        $time=date('his');
        $date = date('dmY');
        return $date.$time;
    }
    function courses()
    {
        $list = Course::all();
        return $list;
    }
    function random($for = null){
    $uid = substr(str_shuffle(str_repeat('0123456789',2)),0,4);

    return $uid;
    }
    function createSlug($name)
    {
        $slug=str_replace(' ', '_', $name);
        return $slug;
    }
?>
