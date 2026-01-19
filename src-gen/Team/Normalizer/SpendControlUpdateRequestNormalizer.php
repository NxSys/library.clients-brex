<?php

namespace NxSys\Library\Clients\Brex\API\Team\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SpendControlUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Team\Model\SpendControlUpdateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Team\Model\SpendControlUpdateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Team\Model\SpendControlUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('spend_limit', $data)) {
            $object->setSpendLimit($this->denormalizer->denormalize($data['spend_limit'], \NxSys\Library\Clients\Brex\API\Team\Model\SpendControlUpdateRequestSpendLimit::class, 'json', $context));
            unset($data['spend_limit']);
        }
        if (\array_key_exists('spend_duration', $data)) {
            $object->setSpendDuration($data['spend_duration']);
            unset($data['spend_duration']);
        }
        if (\array_key_exists('reason', $data) && $data['reason'] !== null) {
            $object->setReason($data['reason']);
            unset($data['reason']);
        }
        elseif (\array_key_exists('reason', $data) && $data['reason'] === null) {
            $object->setReason(null);
        }
        if (\array_key_exists('lock_after_date', $data) && $data['lock_after_date'] !== null) {
            $object->setLockAfterDate(\DateTime::createFromFormat('Y-m-d', $data['lock_after_date'])->setTime(0, 0, 0));
            unset($data['lock_after_date']);
        }
        elseif (\array_key_exists('lock_after_date', $data) && $data['lock_after_date'] === null) {
            $object->setLockAfterDate(null);
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
        if ($data->isInitialized('spendLimit') && null !== $data->getSpendLimit()) {
            $dataArray['spend_limit'] = $this->normalizer->normalize($data->getSpendLimit(), 'json', $context);
        }
        if ($data->isInitialized('spendDuration') && null !== $data->getSpendDuration()) {
            $dataArray['spend_duration'] = $data->getSpendDuration();
        }
        if ($data->isInitialized('reason')) {
            $dataArray['reason'] = $data->getReason();
        }
        if ($data->isInitialized('lockAfterDate')) {
            $dataArray['lock_after_date'] = $data->getLockAfterDate()?->format('Y-m-d');
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
        return [\NxSys\Library\Clients\Brex\API\Team\Model\SpendControlUpdateRequest::class => false];
    }
}