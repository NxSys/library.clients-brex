<?php

namespace NxSys\Library\Clients\Brex\API\Transactions\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Transactions\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Transactions\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CashAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Transactions\Model\CashAccount::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Transactions\Model\CashAccount::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Transactions\Model\CashAccount();
        if (\array_key_exists('primary', $data) && \is_int($data['primary'])) {
            $data['primary'] = (bool) $data['primary'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('current_balance', $data)) {
            $object->setCurrentBalance($this->denormalizer->denormalize($data['current_balance'], \NxSys\Library\Clients\Brex\API\Transactions\Model\Money::class, 'json', $context));
            unset($data['current_balance']);
        }
        if (\array_key_exists('available_balance', $data)) {
            $object->setAvailableBalance($this->denormalizer->denormalize($data['available_balance'], \NxSys\Library\Clients\Brex\API\Transactions\Model\Money::class, 'json', $context));
            unset($data['available_balance']);
        }
        if (\array_key_exists('account_number', $data)) {
            $object->setAccountNumber($data['account_number']);
            unset($data['account_number']);
        }
        if (\array_key_exists('routing_number', $data)) {
            $object->setRoutingNumber($data['routing_number']);
            unset($data['routing_number']);
        }
        if (\array_key_exists('primary', $data)) {
            $object->setPrimary($data['primary']);
            unset($data['primary']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        $dataArray['current_balance'] = $this->normalizer->normalize($data->getCurrentBalance(), 'json', $context);
        $dataArray['available_balance'] = $this->normalizer->normalize($data->getAvailableBalance(), 'json', $context);
        $dataArray['account_number'] = $data->getAccountNumber();
        $dataArray['routing_number'] = $data->getRoutingNumber();
        $dataArray['primary'] = $data->getPrimary();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Transactions\Model\CashAccount::class => false];
    }
}