<?php
namespace Wassa\SmsEnvoiBundle;

use Wassa\SmsEnvoi\SmsEnvoi;

class SendSms
{
	private $apiKey;
	private $email;
	
	public function __construct($apiKey, $email)
	{
		$this->apiKey = $apiKey;
		$this->email = $email;
	}
	
	public function sendSms($tel, $login, $password)
	{
		$content = "Identifiant : $login\nMot de passe : $password\n\nValable aujourd'hui uniquement.";
		$smsenvoi = new SmsEnvoi();
		$smsenvoi->setOptions($this->apiKey, $this->email);
		
		return $smsenvoi->sendSMS($tel, $content, 'PREMIUM', 'OVMaps');
	}
}

?>
