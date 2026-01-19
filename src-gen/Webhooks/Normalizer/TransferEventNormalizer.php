<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TransferEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (array_key_exists('event_type', $data) and 'TRANSFER_FAILED' === $data['event_type']) {
            return $this->denormalizer->denormalize($data, 'NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferFailedEvent', $format, $context);
        }
        if (array_key_exists('event_type', $data) and 'TRANSFER_PROCESSED' === $data['event_type']) {
            return $this->denormalizer->denormalize($data, 'NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferProcessedEvent', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('company_id', $data)) {
            $object->setCompanyId($data['company_id']);
            unset($data['company_id']);
        }
        if (\array_key_exists('payment_type', $data)) {
            $object->setPaymentType($data['payment_type']);
            unset($data['payment_type']);
        }
        if (\array_key_exists('return_for_id', $data) && $data['return_for_id'] !== null) {
            $object->setReturnForId($data['return_for_id']);
            unset($data['return_for_id']);
        }
        elseif (\array_key_exists('return_for_id', $data) && $data['return_for_id'] === null) {
            $object->setReturnForId(null);
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
        if (null !== $data->getEventType() and 'TRANSFER_FAILED' === $data->getEventType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getEventType() and 'TRANSFER_PROCESSED' === $data->getEventType()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['company_id'] = $data->getCompanyId();
        $dataArray['payment_type'] = $data->getPaymentType();
        if ($data->isInitialized('returnForId')) {
            $dataArray['return_for_id'] = $data->getReturnForId();
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
        return [\NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class => false];
    }
}