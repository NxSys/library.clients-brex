<?php

namespace NxSys\Library\Clients\Brex\API\Fields\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Fields\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Fields\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FieldValueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Fields\Model\FieldValue::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Fields\Model\FieldValue::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Fields\Model\FieldValue();
        if (\array_key_exists('is_disabled', $data) && \is_int($data['is_disabled'])) {
            $data['is_disabled'] = (bool) $data['is_disabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('brex_id', $data)) {
            $object->setBrexId($data['brex_id']);
            unset($data['brex_id']);
        }
        if (\array_key_exists('remote_id', $data) && $data['remote_id'] !== null) {
            $object->setRemoteId($data['remote_id']);
            unset($data['remote_id']);
        }
        elseif (\array_key_exists('remote_id', $data) && $data['remote_id'] === null) {
            $object->setRemoteId(null);
        }
        if (\array_key_exists('value_id', $data) && $data['value_id'] !== null) {
            $object->setValueId($data['value_id']);
            unset($data['value_id']);
        }
        elseif (\array_key_exists('value_id', $data) && $data['value_id'] === null) {
            $object->setValueId(null);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        if (\array_key_exists('field_id', $data)) {
            $object->setFieldId($data['field_id']);
            unset($data['field_id']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('is_disabled', $data)) {
            $object->setIsDisabled($data['is_disabled']);
            unset($data['is_disabled']);
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
        $dataArray['brex_id'] = $data->getBrexId();
        if ($data->isInitialized('remoteId')) {
            $dataArray['remote_id'] = $data->getRemoteId();
        }
        if ($data->isInitialized('valueId')) {
            $dataArray['value_id'] = $data->getValueId();
        }
        $dataArray['value'] = $data->getValue();
        $dataArray['field_id'] = $data->getFieldId();
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['is_disabled'] = $data->getIsDisabled();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Fields\Model\FieldValue::class => false];
    }
}