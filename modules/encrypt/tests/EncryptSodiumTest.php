<?php
/**
 * @package    Kohana/Encrypt
 * @group      kohana
 * @group      kohana.encrypt
 * @category   Test
 * @author     Koseven Team
 * @copyright  (c) Kohana Team
 * @license    https://koseven.ga/LICENSE.md
 */
class EncryptSodiumTest extends EncryptBase
{
	/**
	 * @return void
	 */
    public function setUp()
    {
        parent::setUp();

        if ( ! extension_loaded('sodium'))
		{
			$this->markTestSkipped('The Sodium extension is not available.');
		}

        $this->set_config([
            'type' => Encrypt_Engine_Sodium::TYPE,
            'key' => EncryptBase::KEY,
        ]);
    }

    /**
	 * @dataProvider provider_encode_and_decode
	 * @return void
	 */
	public function test_encode_and_decode(string $encryptable)
	{
		$this->encode_and_decode($encryptable);
	}
}
