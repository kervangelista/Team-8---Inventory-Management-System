Welcome to Dashboard

<?php
  if($this->session->userdata('UserLoginSession'))
{
    $udata = $this->session->userdata('UserLoginSession');
    echo 'Welcome'.' '.$udata['username'];
}

else 
{
    redirect(base_url('welcome/login'));
}
?>

<a href="<?=base_url('welcome/logout')?> ">Logout</a>