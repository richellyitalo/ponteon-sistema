<?php
namespace App\Model\Entity;

use App\Helpers\Mask;
use App\Helpers\Misc;
use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $phone
 * @property string $note
 * @property \Cake\I18n\FrozenDate $birthday
 * @property int $notify
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\User $user
 */
class Contact extends Entity
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

	// virtual
	protected $_virtual = [
		'phone_readable'
	];

	// setters
	protected function _setPhone($phone)
	{
		return Misc::onlyNumbers($phone);
	}

	// getters
	protected function _getPhoneReadable()
	{
		return Mask::phone($this->_properties['phone']);
	}

	protected function _getDay()
	{
		return '03';
	}
}
