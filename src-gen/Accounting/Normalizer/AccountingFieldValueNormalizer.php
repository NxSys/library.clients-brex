<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Accounting\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Accounting\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AccountingFieldValueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingFieldValue::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingFieldValue::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingFieldValue();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('brex_field_id', $data)) {
            $object->setBrexFieldId($data['brex_field_id']);
            unset($data['brex_field_id']);
        }
        if (\array_key_exists('remote_field_id', $data) && $data['remote_field_id'] !== null) {
            $object->setRemoteFieldId($data['remote_field_id']);
            unset($data['remote_field_id']);
        }
        elseif (\array_key_exists('remote_field_id', $data) && $data['remote_field_id'] === null) {
            $object->setRemoteFieldId(null);
        }
        if (\array_key_exists('brex_field_value_id', $data)) {
            $object->setBrexFieldValueId($data['brex_field_value_id']);
            unset($data['brex_field_value_id']);
        }
        if (\array_key_exists('remote_field_value_id', $data) && $data['remote_field_value_id'] !== null) {
            $object->setRemoteFieldValueId($data['remote_field_value_id']);
            unset($data['remote_field_value_id']);
        }
        elseif (\array_key_exists('remote_field_value_id', $data) && $data['remote_field_value_id'] === null) {
            $object->setRemoteFieldValueId(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['brex_field_id'] = $data->getBrexFieldId();
        $dataArray['remote_field_id'] = $data->getRemoteFieldId();
        $dataArray['brex_field_value_id'] = $data->getBrexFieldValueId();
        $dataArray['remote_field_value_id'] = $data->getRemoteFieldValueId();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingFieldValue::class => false];
    }
}