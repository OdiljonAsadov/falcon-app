<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;
use str_random;
 
class TelegramBotController extends Controller
{
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        // dd($activity);
    }
 
    public function sendMessage()
    {
        return view('front.contactPage');
    }
 
    public function storeMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'Phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
 
        $text = "Новый запрос для связи с нами\n"
            . "<b>Полное имя: </b>\n"
            . "$request->name\n"
            . "<b>Адрес электронной почты: </b>\n"
            . "$request->email\n"
            . "<b>Номер телефона: </b>\n"
            . "$request->Phone\n"
            . "<b>Тема: </b>\n"
            . "$request->subject\n"
            . "<b>Сообщение: </b>\n"
            . "$request->message\n";
 
        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '-1001566015238'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
 
        return redirect()->back()->with('success', 'Sizning xabaringiz muvaffaqiyatli yuborildi. Qisqa vaqt ichida biz sizga javob qaytaramiz!');
    }
 
    public function sendPhoto()
    {
        return view('telegram.photo');
    }
 
    public function storePhoto(Request $request)
    {
        $request->validate([
            'file' => 'file|mimes:jpeg,png,gif'
        ]);
 
        $photo = $request->file('file');
 
        Telegram::sendPhoto([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '-1001566015238'),
            'photo' => InputFile::createFromContents(file_get_contents($photo->getRealPath()), time() . '.' . $photo->getClientOriginalExtension())
        ]);
 
        return redirect()->back();
    }
}