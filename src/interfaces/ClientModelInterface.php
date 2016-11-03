<?php
/**
 * ClientModelInterface.php
 *
 * PHP version 5.6+
 *
 * @author Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2016 Philippe Gaultier
 * @license http://www.sweelix.net/license license
 * @version XXX
 * @link http://www.sweelix.net
 * @package sweelix\oauth2\server\interfaces
 */

namespace sweelix\oauth2\server\interfaces;

/**
 * This is the client model interface
 *
 * @author Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2016 Philippe Gaultier
 * @license http://www.sweelix.net/license license
 * @version XXX
 * @link http://www.sweelix.net
 * @package sweelix\oauth2\server\interfaces
 * @since XXX
 *
 * @property string $id
 * @property string $secret
 * @property string $redirectUri
 * @property array $grantTypes
 * @property string $userId
 * @property array $scopes
 * @property string $name
 * @property bool $isPublic
 */
interface ClientModelInterface extends BaseModelInterface
{
    /**
     * Find one client by its key
     *
     * @param string $id
     * @return ClientModelInterface|null
     * @since XXX
     * @throws \yii\base\UnknownClassException
     */
    public static function findOne($id);

    /**
     * @param bool $runValidation
     * @param null $attributes
     * @return bool
     * @since XXX
     * @throws \yii\base\UnknownClassException
     */
    public function save($runValidation = true, $attributes = null);

    /**
     * @return bool
     * @since XXX
     * @throws \yii\base\UnknownClassException
     */
    public function delete();

    /**
     * @param $userId
     * @return bool
     * @since XXX
     */
    public function hasUser($userId);

    /**
     * @param $userId
     * @return bool
     * @since XXX
     */
    public function addUser($userId);

    /**
     * @param $userId
     * @return bool
     * @since XXX
     */
    public function removeUser($userId);
}
