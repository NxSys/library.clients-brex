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
class FieldCreateBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Fields\Model\FieldCreateBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Fields\Model\FieldCreateBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Fields\Model\FieldCreateBody();
        if (\array_key_exists('is_disabled', $data) && \is_int($data['is_disabled'])) {
            $data['is_disabled'] = (bool) $data['is_disabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('group', $data)) {
            $object->setGroup($data['group']);
            unset($data['group']);
        }
        if (\array_key_exists('remote_id', $data) && $data['remote_id'] !== null) {
            $object->setRemoteId($data['remote_id']);
            unset($data['remote_id']);
        }
        elseif (\array_key_exists('remote_id', $data) && $data['remote_id'] === null) {
            $object->setRemoteId(null);
        }
        if (\array_key_exists('integration_id', $data) && $data['integration_id'] !== null) {
            $object->setIntegrationId($data['integration_id']);
            unset($data['integration_id']);
        }
        elseif (\array_key_exists('integration_id', $data) && $data['integration_id'] === null) {
            $object->setIntegrationId(null);
        }
        if (\array_key_exists('is_disabled', $data) && $data['is_disabled'] !== null) {
            $object->setIsDisabled($data['is_disabled']);
            unset($data['is_disabled']);
        }
        elseif (\array_key_exists('is_disabled', $data) && $data['is_disabled'] === null) {
            $object->setIsDisabled(null);
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
        $dataArray['name'] = $data->getName();
        $dataArray['group'] = $data->getGroup();
        if ($data->isInitialized('remoteId')) {
            $dataArray['remote_id'] = $data->getRemoteId();
        }
        if ($data->isInitialized('integrationId')) {
            $dataArray['integration_id'] = $data->getIntegrationId();
        }
        if ($data->isInitialized('isDisabled')) {
            $dataArray['is_disabled'] = $data->getIsDisabled();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Fields\Model\FieldCreateBody::class => false];
    }
}