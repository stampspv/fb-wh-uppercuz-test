<?

require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

session_start();
$fb = new Facebook\Facebook([
  'app_id' => '1651280148319071', // Replace {app-id} with your app id
  'app_secret' => 'ef76a8fe234fbc0ef4005cb889ae5d19',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['manage_pages', 'pages_show_list']; // ตรงนี้แล้วแต่จะใส่ครับ
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';