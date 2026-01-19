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
class BankAccountDetailsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Payments\Model\BankAccountDetailsResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Payments\Model\BankAccountDetailsResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Payments\Model\BankAccountDetailsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('routing_number', $data) && $data['routing_number'] !== null) {
            $object->setRoutingNumber($data['routing_number']);
            unset($data['routing_number']);
        }
        elseif (\array_key_exists('routing_number', $data) && $data['routing_number'] === null) {
            $object->setRoutingNumber(null);
        }
        if (\array_key_exists('account_number', $data) && $data['account_number'] !== null) {
            $object->setAccountNumber($data['account_number']);
            unset($data['account_number']);
        }
        elseif (\array_key_exists('account_number', $data) && $data['account_number'] === null) {
            $object->setAccountNumber(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('beneficiary_bank', $data)) {
            $object->setBeneficiaryBank($this->denormalizer->denormalize($data['beneficiary_bank'], \NxSys\Library\Clients\Brex\API\Payments\Model\BankAccountDetailsResponsebeneficiaryBank::class, 'json', $context));
            unset($data['beneficiary_bank']);
        }
        if (\array_key_exists('fed_reference_number', $data) && $data['fed_reference_number'] !== null) {
            $object->setFedReferenceNumber($data['fed_reference_number']);
            unset($data['fed_reference_number']);
        }
        elseif (\array_key_exists('fed_reference_number', $data) && $data['fed_reference_number'] === null) {
            $object->setFedReferenceNumber(null);
        }
        if (\array_key_exists('external_memo', $data) && $data['external_memo'] !== null) {
            $object->setExternalMemo($data['external_memo']);
            unset($data['external_memo']);
        }
        elseif (\array_key_exists('external_memo', $data) && $data['external_memo'] === null) {
            $object->setExternalMemo(null);
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
        if ($data->isInitialized('routingNumber')) {
            $dataArray['routing_number'] = $data->getRoutingNumber();
        }
        if ($data->isInitialized('accountNumber')) {
            $dataArray['account_number'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('beneficiaryBank') && null !== $data->getBeneficiaryBank()) {
            $dataArray['beneficiary_bank'] = $this->normalizer->normalize($data->getBeneficiaryBank(), 'json', $context);
        }
        if ($data->isInitialized('fedReferenceNumber')) {
            $dataArray['fed_reference_number'] = $data->getFedReferenceNumber();
        }
        if ($data->isInitialized('externalMemo')) {
            $dataArray['external_memo'] = $data->getExternalMemo();
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
        return [\NxSys\Library\Clients\Brex\API\Payments\Model\BankAccountDetailsResponse::class => false];
    }
}