<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Payments\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Payments\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TransferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Payments\Model\Transfer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Payments\Model\Transfer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Payments\Model\Transfer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('counterparty', $data)) {
            $object->setCounterparty($this->denormalizer->denormalize($data['counterparty'], \NxSys\Library\Clients\Brex\API\Payments\Model\TransferCounterparty::class, 'json', $context));
            unset($data['counterparty']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('payment_type', $data)) {
            $object->setPaymentType($data['payment_type']);
            unset($data['payment_type']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($this->denormalizer->denormalize($data['amount'], \NxSys\Library\Clients\Brex\API\Payments\Model\Money::class, 'json', $context));
            unset($data['amount']);
        }
        if (\array_key_exists('process_date', $data) && $data['process_date'] !== null) {
            $object->setProcessDate(\DateTime::createFromFormat('Y-m-d', $data['process_date'])->setTime(0, 0, 0));
            unset($data['process_date']);
        }
        elseif (\array_key_exists('process_date', $data) && $data['process_date'] === null) {
            $object->setProcessDate(null);
        }
        if (\array_key_exists('originating_account', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['originating_account'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setOriginatingAccount($values);
            unset($data['originating_account']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('cancellation_reason', $data)) {
            $object->setCancellationReason($data['cancellation_reason']);
            unset($data['cancellation_reason']);
        }
        if (\array_key_exists('estimated_delivery_date', $data) && $data['estimated_delivery_date'] !== null) {
            $object->setEstimatedDeliveryDate(\DateTime::createFromFormat('Y-m-d', $data['estimated_delivery_date'])->setTime(0, 0, 0));
            unset($data['estimated_delivery_date']);
        }
        elseif (\array_key_exists('estimated_delivery_date', $data) && $data['estimated_delivery_date'] === null) {
            $object->setEstimatedDeliveryDate(null);
        }
        if (\array_key_exists('creator_user_id', $data) && $data['creator_user_id'] !== null) {
            $object->setCreatorUserId($data['creator_user_id']);
            unset($data['creator_user_id']);
        }
        elseif (\array_key_exists('creator_user_id', $data) && $data['creator_user_id'] === null) {
            $object->setCreatorUserId(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d', $data['created_at'])->setTime(0, 0, 0));
            unset($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('display_name', $data) && $data['display_name'] !== null) {
            $object->setDisplayName($data['display_name']);
            unset($data['display_name']);
        }
        elseif (\array_key_exists('display_name', $data) && $data['display_name'] === null) {
            $object->setDisplayName(null);
        }
        if (\array_key_exists('external_memo', $data) && $data['external_memo'] !== null) {
            $object->setExternalMemo($data['external_memo']);
            unset($data['external_memo']);
        }
        elseif (\array_key_exists('external_memo', $data) && $data['external_memo'] === null) {
            $object->setExternalMemo(null);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('counterparty') && null !== $data->getCounterparty()) {
            $dataArray['counterparty'] = $this->normalizer->normalize($data->getCounterparty(), 'json', $context);
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        $dataArray['payment_type'] = $data->getPaymentType();
        $dataArray['amount'] = $this->normalizer->normalize($data->getAmount(), 'json', $context);
        if ($data->isInitialized('processDate')) {
            $dataArray['process_date'] = $data->getProcessDate()?->format('Y-m-d');
        }
        $values = [];
        foreach ($data->getOriginatingAccount() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['originating_account'] = $values;
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('cancellationReason') && null !== $data->getCancellationReason()) {
            $dataArray['cancellation_reason'] = $data->getCancellationReason();
        }
        if ($data->isInitialized('estimatedDeliveryDate')) {
            $dataArray['estimated_delivery_date'] = $data->getEstimatedDeliveryDate()?->format('Y-m-d');
        }
        if ($data->isInitialized('creatorUserId')) {
            $dataArray['creator_user_id'] = $data->getCreatorUserId();
        }
        if ($data->isInitialized('createdAt')) {
            $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d');
        }
        if ($data->isInitialized('displayName')) {
            $dataArray['display_name'] = $data->getDisplayName();
        }
        if ($data->isInitialized('externalMemo')) {
            $dataArray['external_memo'] = $data->getExternalMemo();
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Payments\Model\Transfer::class => false];
    }
}