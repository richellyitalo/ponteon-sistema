<?php
namespace App\Model\Entity;

use App\Helpers\Mask;
use App\Helpers\Misc;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Contact[] $contacts
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

	// virtual
	protected $_virtual = [
		'phone_readable'
	];


	// setters
	protected function _setPassword($password)
	{
		if (strlen($password) > 0)
			return (new DefaultPasswordHasher())->hash($password);
	}

	protected function _setPhone($phone)
	{
		return Misc::onlyNumbers($phone);
	}

	// getters
	protected function _getPhoneReadable()
	{
		return Mask::phone($this->_properties['phone']);
	}
}
