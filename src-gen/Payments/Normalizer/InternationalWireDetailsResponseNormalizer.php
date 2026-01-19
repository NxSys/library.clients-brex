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
class InternationalWireDetailsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Payments\Model\InternationalWireDetailsResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Payments\Model\InternationalWireDetailsResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Payments\Model\InternationalWireDetailsResponse();
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
        if (\array_key_exists('swift_code', $data)) {
            $object->setSwiftCode($data['swift_code']);
            unset($data['swift_code']);
        }
        if (\array_key_exists('iban', $data)) {
            $object->setIban($data['iban']);
            unset($data['iban']);
        }
        if (\array_key_exists('beneficiary_bank_name', $data) && $data['beneficiary_bank_name'] !== null) {
            $object->setBeneficiaryBankName($data['beneficiary_bank_name']);
            unset($data['beneficiary_bank_name']);
        }
        elseif (\array_key_exists('beneficiary_bank_name', $data) && $data['beneficiary_bank_name'] === null) {
            $object->setBeneficiaryBankName(null);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \NxSys\Library\Clients\Brex\API\Payments\Model\Address::class, 'json', $context));
            unset($data['address']);
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
        $dataArray['swift_code'] = $data->getSwiftCode();
        $dataArray['iban'] = $data->getIban();
        if ($data->isInitialized('beneficiaryBankName')) {
            $dataArray['beneficiary_bank_name'] = $data->getBeneficiaryBankName();
        }
        $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Payments\Model\InternationalWireDetailsResponse::class => false];
    }
}