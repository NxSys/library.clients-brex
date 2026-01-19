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
class ACHDetailsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Payments\Model\ACHDetailsResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Payments\Model\ACHDetailsResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Payments\Model\ACHDetailsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('payment_instrument_id', $data)) {
            $object->setPaymentInstrumentId($data['payment_instrument_id']);
            unset($data['payment_instrument_id']);
        }
        if (\array_key_exists('routing_number', $data)) {
            $object->setRoutingNumber($data['routing_number']);
            unset($data['routing_number']);
        }
        if (\array_key_exists('account_number', $data)) {
            $object->setAccountNumber($data['account_number']);
            unset($data['account_number']);
        }
        if (\array_key_exists('account_type', $data)) {
            $object->setAccountType($data['account_type']);
            unset($data['account_type']);
        }
        if (\array_key_exists('account_class', $data)) {
            $object->setAccountClass($data['account_class']);
            unset($data['account_class']);
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
        $dataArray['type'] = $data->getType();
        $dataArray['payment_instrument_id'] = $data->getPaymentInstrumentId();
        $dataArray['routing_number'] = $data->getRoutingNumber();
        $dataArray['account_number'] = $data->getAccountNumber();
        if ($data->isInitialized('accountType') && null !== $data->getAccountType()) {
            $dataArray['account_type'] = $data->getAccountType();
        }
        if ($data->isInitialized('accountClass') && null !== $data->getAccountClass()) {
            $dataArray['account_class'] = $data->getAccountClass();
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
        return [\NxSys\Library\Clients\Brex\API\Payments\Model\ACHDetailsResponse::class => false];
    }
}