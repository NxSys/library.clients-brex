<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Model;

class Document extends \ArrayObject
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
     * This is a presigned S3 link that should be used to attach the document.
     * The maximum size accepted for this document is 50 MB.
     *
     * @var string
     */
    protected $uri;
    /**
     * Unique identifier for the document.
     *
     * @var string
     */
    protected $id;
    /**
     * This is a presigned S3 link that should be used to attach the document.
     * The maximum size accepted for this document is 50 MB.
     *
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }
    /**
    * This is a presigned S3 link that should be used to attach the document.
    The maximum size accepted for this document is 50 MB.
    *
    * @param string $uri
    *
    * @return self
    */
    public function setUri(string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
    /**
     * Unique identifier for the document.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier for the document.
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
}