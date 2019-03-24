$email = param('email');
empty($email) AND message('email', lang('please_input_email'));
!is_email($email, $err) AND message('email', $err);
$t = explode('@', $email);
$postfix = $t[count($t)-1] ?? "";
!in_array($postfix, ["wm.edu", "email.wm.edu"]) AND message('email', lang('please_input_right_postfix'));
