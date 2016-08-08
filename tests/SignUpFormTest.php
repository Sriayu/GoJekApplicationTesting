<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SignUpFormTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
	
	 public function testSignUpExample() {		 
		 //$response = $this->post('15todo/CreateVisitors', ['name' => 'Sally', 'email' => 'Sally', 'phone' => 'Sally', 'occupation' => 'Sally']);
		 //$this->assertEquals("Failed", $response);
		 
		 $response = $this->action('POST','FormController@signUp', [
            'name' => 'validusername',
            'email' => 'some@validemail.com',
            'phone' => 'passw0rd',
            'occupation' => 'passw0rd',
        ]);
        $this->assertTrue($response->isOk(), "Custom message if something went wrong");

        $session_errors = \Laravel\Session::instance()->get('errors');
        $this->assertNull($session_errors);
	 }
}
