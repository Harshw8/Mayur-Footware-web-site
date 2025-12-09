<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;   
use App\Models\Profile;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('backend.profile_edit');
    }

    public function changePassword()
    {
        return view('backend.profile_change_password');
    }

    public function updatePassword()
    {
        return redirect()->route('backend.profile_edit');
    }

    public function stringTest()
    {
        echo "Q1: Everything before the first dash<br>";
        $string = "Laravel-10-Release";
        echo "Ans: " . Str::before($string,'-') . "<br><br>";

        echo "Q2: Between tag<br>";
        $string = "<tag>Hello World</tag>";
        echo "Ans: " . Str::between($string,'<tag>','</tag>') . "<br><br>";

        echo "Q3: Contains words check<br>";
        $string = "Laravel is powerful and elegant";
        echo "Ans: ";
        echo Str::containsAll($string,['Laravel','elegant']);
        echo "<br><br>";

        echo "Q4: Repeat string<br>";
        $string = "Hi";
        echo "Ans: " . Str::repeat($string,3) . "<br><br>";

        echo "Q5: Headline format<br>";
        $string = "text_to_display_on_dashboard";
        echo "Ans: " . ucwords(str_replace(['_', '-'], ' ', $string)) . "<br><br>";

        echo "Q6: ULID Check<br>";
        $string = "01H8C5QEG01V5NR8Z3K3A3G6P9";
        echo "Ans: " . Str::isUlid($string) . "<br><br>";

        echo "Q7: Lowercase<br>";
        echo "Ans: " . Str::lower("Laravel") . "<br><br>";

        echo "Q8: String Length<br>";
        echo "Ans: " . Str::length("Hello Laravel") . "<br><br>";

        echo "Q9: Lowercase again<br>";
        echo "Ans: " . Str::lower("Welcome TO Laravel") . "<br><br>";

        echo "Q10: Mask Email<br>";
        $string = "vivek@example.com";
        [$local, $domain] = explode('@', $string);
        $maskedLocal = substr_replace($local, str_repeat('*', strlen($local)-2), 2);
        echo "Ans: " . $maskedLocal . '@' . $domain . "<br><br>";

        echo "Q11: Pad Both<br>";
        echo "Ans: " . Str::padBoth("Laravel",12,'-') . "<br><br>";
    }
}
