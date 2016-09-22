<?php

namespace Anax\Flash;

/**
 * HTML Form elements.
 *
 */
class FlashDirectTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test
     *
     * @return void
     *
     */
    public function testCreate1()
    {
        $flash = new \Anax\Flash\FlashDirect();

        $res = $flash->redirectTo("Home");
        $exp = "Home";

        $this->assertEquals($res, $exp, "Can't set redirectTo.");
    }

    public function testShowFlash()
    {
        $flash = new \Anax\Flash\FlashDirect();

        $flash->warning("w");
        $res = $flash->showFlash();
        $res .= " <div style='width: 100%; height: 100px; background: #000; '>";
        $res .= "<p style=' width: 100%; text-align: center;  z-index: 99999;  padding-top: 35px; color: #de1a1a;' >w";
        $res .= "</p></div>";
        $res .= "<script>setTimeout(\"location.href = '';\",1500);</script>";
        $this->expectOutputString($res);
    }

    public function testSetTime()
    {
        $flash = new \Anax\Flash\FlashDirect();


        $res = $flash->setTime(300);
        $exp = 300;

        $this->assertEquals($res, $exp, "Can't set redirectTo.");
    }

    public function testAlert()
    {
        $flash = new \Anax\Flash\FlashDirect();


        $res = $flash->alert("MSG");
        $exp = "MSG";
        $this->assertEquals($res, $exp, "Can't set redirectTo.");

        $res = $flash->alert();
        $exp = "Alert, something isn't right!";
        $this->assertEquals($res, $exp, "Can't set redirectTo.");


    }

    public function testWarning()
    {
        $flash = new \Anax\Flash\FlashDirect();

        $res = $flash->warning("MSG");
        $exp = "MSG";
        $this->assertEquals($res, $exp, "Can't set redirectTo.");

        $res = $flash->warning();
        $exp = "WARNING, something isn't right!";
        $this->assertEquals($res, $exp, "Can't set redirectTo.");

    }

    public function testSuccess()
    {
        $flash = new \Anax\Flash\FlashDirect();
        $res = $flash->success("MSG");
        $exp = "MSG";
        $this->assertEquals($res, $exp, "Can't set redirectTo.");

        $res = $flash->success();
        $exp = "success!";
        $this->assertEquals($res, $exp, "Can't set redirectTo.");
    }
}
