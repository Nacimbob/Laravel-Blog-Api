warning: LF will be replaced by CRLF in Modules/Blog/Routes/api.php.
The file will have its original line endings in your working directory
warning: LF will be replaced by CRLF in app/Http/Kernel.php.
The file will have its original line endings in your working directory
warning: LF will be replaced by CRLF in app/Models/User.php.
The file will have its original line endings in your working directory
[1mdiff --git a/Modules/Blog/Routes/api.php b/Modules/Blog/Routes/api.php[m
[1mindex 3e6b335..16967f4 100644[m
[1m--- a/Modules/Blog/Routes/api.php[m
[1m+++ b/Modules/Blog/Routes/api.php[m
[36m@@ -18,6 +18,6 @@[m [mRoute::middleware('auth:api')->get('/blog', function (Request $request) {[m
     return $request->user();[m
 });[m
 [m
[31m-Route::group(['prefix' => 'blog'], function () {[m
[32m+[m[32mRoute::group(['prefix' => 'blog','middleware'=>'admin'], function () {[m
     Route::resource('bloggers', 'BloggerController')->except(['create','edit']);[m
 });[m
[1mdiff --git a/app/Http/Kernel.php b/app/Http/Kernel.php[m
[1mindex 30020a5..818266f 100644[m
[1m--- a/app/Http/Kernel.php[m
[1m+++ b/app/Http/Kernel.php[m
[36m@@ -62,5 +62,6 @@[m [mclass Kernel extends HttpKernel[m
         'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,[m
         'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,[m
         'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,[m
[32m+[m[32m        'admin' => \App\Http\Middleware\EnsureIsAdmin::class,[m
     ];[m
 }[m
[1mdiff --git a/app/Models/User.php b/app/Models/User.php[m
[1mindex 86b86df..a4b591f 100644[m
[1m--- a/app/Models/User.php[m
[1m+++ b/app/Models/User.php[m
[36m@@ -30,6 +30,7 @@[m [mclass User extends Authenticatable[m
     protected $hidden = [[m
         'password',[m
         'remember_token',[m
[32m+[m[32m        'admin'[m
     ];[m
 [m
     /**[m
[36m@@ -40,4 +41,12 @@[m [mclass User extends Authenticatable[m
     protected $casts = [[m
         'email_verified_at' => 'datetime',[m
     ];[m
[32m+[m
[32m+[m[32m    /**[m
[32m+[m[32m     * The attributes that should be protected from mass assign[m
[32m+[m[32m     */[m
[32m+[m[32m     protected $guarded=[[m
[32m+[m[32m        'admin'[m
[32m+[m[32m     ];[m
[32m+[m
 }[m
