<?php
/**
 * Created by PhpStorm.
 * User: Olive
 * Date: 03.01.2017
 * Time: 21:23
 *
 *
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Image
 *
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks
 */
class Picture extends BaseEntity
{
    /**
     * Image path
     *
     * @var string
     *
     * @ORM\Column(type="text", length=255, nullable=false)
     */
    private $path;

    /**
     * Image file
     *
     * @var File
     *
     * @Assert\File(
     *     maxSize = "5M",
     *     mimeTypes = {"image/jpeg", "image/gif", "image/png", "image/tiff"},
     *     maxSizeMessage = "The maxmimum allowed file size is 5MB.",
     *     mimeTypesMessage = "Only the filetypes image are allowed."
     * )
     */
    private $file;

    /**
     * Getter/Setter
     */


    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param File $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }
}