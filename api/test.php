
<?php 
//是否显示notice级别提示
/* Report all errors except E_NOTICE */
//error_reporting(E_ALL^E_NOTICE);
//跨域header设置
header('Access-Control-Allow-Origin:*');
header('content-type:application:json;charset=utf8');
header('Access-Control-Allow-Methods:POST,OPTIONS,GET');
header('Access-Control-Allow-Headers:x-requested-with,content-type');

/*header('Access-Control-Allow-Origin', '*');
header('content-type:application:json;charset=utf8');
header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, Accept');
header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, OPTIONS');
header('Access-Control-Allow-Credentials', 'true');
header('Access-Control-Allow-Headers:x-requested-with,content-type');*/

require './php-sdk-7.1.3/autoload.php';
  use Qiniu\Auth;
  use Qiniu\Storage\UploadManager;
  

  $accessKey = '1D6xwfFsmvQ5OH92qE56EbXemYPkMYm9Ry6S2HaV';
  $secretKey = 'uJP58pLViu4tfMouFbW6H0BMT06FdtB0HSzLqFn8';
  $auth = new Auth($accessKey, $secretKey);
  // 空间名  https://developer.qiniu.io/kodo/manual/concepts
  $bucket = 'fortest';
  // 生成上传Token
  $token = $auth->uploadToken($bucket);
  // 构建 UploadManager 对象
  $uploadMgr = new UploadManager();
  $upToken = $auth->uploadToken($bucket);
  echo '{"uptoken": ',json_encode($upToken),'}';
?>