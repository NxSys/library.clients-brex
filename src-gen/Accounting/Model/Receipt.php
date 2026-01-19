<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Model;

class Receipt extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Unique identifier for the receipt
     *
     * @var string
     */
    protected $id;
    /**
     * Presigned S3 URLs to download receipt files (expire in 15 minutes)
     *
     * @var list<string>|null
     */
    protected $downloadUris;
    /**
     * Unique identifier for the receipt
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier for the receipt
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Presigned S3 URLs to download receipt files (expire in 15 minutes)
     *
     * @return list<string>|null
     */
    public function getDownloadUris(): ?array
    {
        return $this->downloadUris;
    }
    /**
     * Presigned S3 URLs to download receipt files (expire in 15 minutes)
     *
     * @param list<string>|null $downloadUris
     *
     * @return self
     */
    public function setDownloadUris(?array $downloadUris): self
    {
        $this->initialized['downloadUris'] = true;
        $this->downloadUris = $downloadUris;
        return $this;
    }
}