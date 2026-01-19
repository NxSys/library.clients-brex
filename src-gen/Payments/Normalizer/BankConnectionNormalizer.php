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
class BankConnectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('bank_details', $data)) {
            $object->setBankDetails($this->denormalizer->denormalize($data['bank_details'], \NxSys\Library\Clients\Brex\API\Payments\Model\BankDetails::class, 'json', $context));
            unset($data['bank_details']);
        }
        if (\array_key_exists('brex_account_id', $data) && $data['brex_account_id'] !== null) {
            $object->setBrexAccountId($data['brex_account_id']);
            unset($data['brex_account_id']);
        }
        elseif (\array_key_exists('brex_account_id', $data) && $data['brex_account_id'] === null) {
            $object->setBrexAccountId(null);
        }
        if (\array_key_exists('last_four', $data)) {
            $object->setLastFour($data['last_four']);
            unset($data['last_four']);
        }
        if (\array_key_exists('available_balance', $data)) {
            $object->setAvailableBalance($this->denormalizer->denormalize($data['available_balance'], \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnectionAvailableBalance::class, 'json', $context));
            unset($data['available_balance']);
        }
        if (\array_key_exists('current_balance', $data)) {
            $object->setCurrentBalance($this->denormalizer->denormalize($data['current_balance'], \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnectionCurrentBalance::class, 'json', $context));
            unset($data['current_balance']);
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
        if ($data->isInitialized('bankDetails') && null !== $data->getBankDetails()) {
            $dataArray['bank_details'] = $this->normalizer->normalize($data->getBankDetails(), 'json', $context);
        }
        if ($data->isInitialized('brexAccountId')) {
            $dataArray['brex_account_id'] = $data->getBrexAccountId();
        }
        $dataArray['last_four'] = $data->getLastFour();
        if ($data->isInitialized('availableBalance') && null !== $data->getAvailableBalance()) {
            $dataArray['available_balance'] = $this->normalizer->normalize($data->getAvailableBalance(), 'json', $context);
        }
        if ($data->isInitialized('currentBalance') && null !== $data->getCurrentBalance()) {
            $dataArray['current_balance'] = $this->normalizer->normalize($data->getCurrentBalance(), 'json', $context);
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
        return [\NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection::class => false];
    }
}