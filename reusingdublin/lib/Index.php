<?php
namespace ReusingDublin;
use ReusingDublin;

class Index extends Controller{

	public function action()
	{
		$this->data['title'] = 'Homepage';
		return $this;
	}

	/**
	 * Action callback.
	 * Subscribe to newsletter on hompage.
	 * @return Index Returns self
	 */
	public function actionSubscribe()
	{

        if(isset($_GET['data'])){

            $mail = new \PHPMailer;
            $data = $_GET['data'];
            $config = Config::getInstance()->get('admin');

            $mail->From = $data['email'];
			$mail->FromName = 'Reusing Dublin';
            $mail->Subject = 'Reusing Dublin - newsletter request';
            $mail->Body = "
				The following Person wants to Register with Us: {$data['email']}
			";
            $mail->addAddress($config['email'],$config['name']);
			$mail->addReplyTo($data['email']);
			$mail->setFrom($data['email'], $data['email']);

            if(!$mail->send()) {


                echo '
                    <div class="alert alert-error">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Error!</strong> A problem has been occurred while submitting your data.
                        ' . $mail->ErrorInfo . '
                    </div>';
            } else {
                echo '
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Success!</strong> Your message has been sent successfully.
                    </div>';
            }
        }

        return $this;
    }
}
