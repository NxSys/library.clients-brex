<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DomesticInstructionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Onboarding\Model\DomesticInstruction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Onboarding\Model\DomesticInstruction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Onboarding\Model\DomesticInstruction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('account_type', $data)) {
            $object->setAccountType($data['account_type']);
            unset($data['account_type']);
        }
        if (\array_key_exists('bank_account_number', $data)) {
            $object->setBankAccountNumber($data['bank_account_number']);
            unset($data['bank_account_number']);
        }
        if (\array_key_exists('bank_routing_number', $data)) {
            $object->setBankRoutingNumber($data['bank_routing_number']);
            unset($data['bank_routing_number']);
        }
        if (\array_key_exists('beneficiary_name', $data)) {
            $object->setBeneficiaryName($data['beneficiary_name']);
            unset($data['beneficiary_name']);
        }
        if (\array_key_exists('beneficiary_address', $data)) {
            $object->setBeneficiaryAddress($data['beneficiary_address']);
            unset($data['beneficiary_address']);
        }
        if (\array_key_exists('bank_name', $data)) {
            $object->setBankName($data['bank_name']);
            unset($data['bank_name']);
        }
        if (\array_key_exists('bank_address', $data)) {
            $object->setBankAddress($data['bank_address']);
            unset($data['bank_address']);
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
        $dataArray['account_type'] = $data->getAccountType();
        $dataArray['bank_account_number'] = $data->getBankAccountNumber();
        $dataArray['bank_routing_number'] = $data->getBankRoutingNumber();
        $dataArray['beneficiary_name'] = $data->getBeneficiaryName();
        $dataArray['beneficiary_address'] = $data->getBeneficiaryAddress();
        $dataArray['bank_name'] = $data->getBankName();
        $dataArray['bank_address'] = $data->getBankAddress();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Onboarding\Model\DomesticInstruction::class => false];
    }
}