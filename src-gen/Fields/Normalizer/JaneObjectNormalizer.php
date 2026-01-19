<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Normalizer;

use NxSys\Library\Clients\Brex\API\Fields\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Fields\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueBody::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\CreateFieldValueBodyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListBody::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\CreateFieldValueListBodyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListResponse::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\CreateFieldValueListResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueByBrexId::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\DeleteFieldValueByBrexIdNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueByRemoteId::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\DeleteFieldValueByRemoteIdNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueByValueId::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\DeleteFieldValueByValueIdNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueListBody::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\DeleteFieldValueListBodyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\Field::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\FieldNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\FieldCreateBody::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\FieldCreateBodyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\FieldUpdateBody::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\FieldUpdateBodyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\FieldValue::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\FieldValueNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\PageFieldValue::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\PageFieldValueNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\PageField::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\PageFieldNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByBrexId::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\UpdateFieldValueByBrexIdNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByBrexIdData::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\UpdateFieldValueByBrexIdDataNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByRemoteId::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\UpdateFieldValueByRemoteIdNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByRemoteIdData::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\UpdateFieldValueByRemoteIdDataNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByValueId::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\UpdateFieldValueByValueIdNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByValueIdData::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\UpdateFieldValueByValueIdDataNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueDataBody::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\UpdateFieldValueDataBodyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListBody::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\UpdateFieldValueListBodyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListResponse::class => \NxSys\Library\Clients\Brex\API\Fields\Normalizer\UpdateFieldValueListResponseNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Fields\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueBody::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListBody::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\CreateFieldValueListResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueByBrexId::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueByRemoteId::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueByValueId::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\DeleteFieldValueListBody::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\Field::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\FieldCreateBody::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\FieldUpdateBody::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\FieldValue::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\PageFieldValue::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\PageField::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByBrexId::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByBrexIdData::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByRemoteId::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByRemoteIdData::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByValueId::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueByValueIdData::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueDataBody::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListBody::class => false,
            \NxSys\Library\Clients\Brex\API\Fields\Model\UpdateFieldValueListResponse::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}