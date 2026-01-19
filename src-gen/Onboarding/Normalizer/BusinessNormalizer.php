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
class BusinessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Onboarding\Model\Business::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Onboarding\Model\Business::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Onboarding\Model\Business();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('legal_name', $data) && $data['legal_name'] !== null) {
            $object->setLegalName($data['legal_name']);
            unset($data['legal_name']);
        }
        elseif (\array_key_exists('legal_name', $data) && $data['legal_name'] === null) {
            $object->setLegalName(null);
        }
        if (\array_key_exists('incorporation_type', $data)) {
            $object->setIncorporationType($data['incorporation_type']);
            unset($data['incorporation_type']);
        }
        if (\array_key_exists('employer_identification_number', $data) && $data['employer_identification_number'] !== null) {
            $object->setEmployerIdentificationNumber($data['employer_identification_number']);
            unset($data['employer_identification_number']);
        }
        elseif (\array_key_exists('employer_identification_number', $data) && $data['employer_identification_number'] === null) {
            $object->setEmployerIdentificationNumber(null);
        }
        if (\array_key_exists('website_url', $data) && $data['website_url'] !== null) {
            $object->setWebsiteUrl($data['website_url']);
            unset($data['website_url']);
        }
        elseif (\array_key_exists('website_url', $data) && $data['website_url'] === null) {
            $object->setWebsiteUrl(null);
        }
        if (\array_key_exists('activity_description', $data) && $data['activity_description'] !== null) {
            $object->setActivityDescription($data['activity_description']);
            unset($data['activity_description']);
        }
        elseif (\array_key_exists('activity_description', $data) && $data['activity_description'] === null) {
            $object->setActivityDescription(null);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \NxSys\Library\Clients\Brex\API\Onboarding\Model\BusinessAddress::class, 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('beneficial_owners', $data) && $data['beneficial_owners'] !== null) {
            $values = [];
            foreach ($data['beneficial_owners'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwner::class, 'json', $context);
            }
            $object->setBeneficialOwners($values);
            unset($data['beneficial_owners']);
        }
        elseif (\array_key_exists('beneficial_owners', $data) && $data['beneficial_owners'] === null) {
            $object->setBeneficialOwners(null);
        }
        if (\array_key_exists('alternate_address', $data)) {
            $object->setAlternateAddress($this->denormalizer->denormalize($data['alternate_address'], \NxSys\Library\Clients\Brex\API\Onboarding\Model\BusinessAlternateAddress::class, 'json', $context));
            unset($data['alternate_address']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('legalName')) {
            $dataArray['legal_name'] = $data->getLegalName();
        }
        if ($data->isInitialized('incorporationType') && null !== $data->getIncorporationType()) {
            $dataArray['incorporation_type'] = $data->getIncorporationType();
        }
        if ($data->isInitialized('employerIdentificationNumber')) {
            $dataArray['employer_identification_number'] = $data->getEmployerIdentificationNumber();
        }
        if ($data->isInitialized('websiteUrl')) {
            $dataArray['website_url'] = $data->getWebsiteUrl();
        }
        if ($data->isInitialized('activityDescription')) {
            $dataArray['activity_description'] = $data->getActivityDescription();
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        if ($data->isInitialized('beneficialOwners')) {
            $values = [];
            foreach ($data->getBeneficialOwners() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['beneficial_owners'] = $values;
        }
        if ($data->isInitialized('alternateAddress') && null !== $data->getAlternateAddress()) {
            $dataArray['alternate_address'] = $this->normalizer->normalize($data->getAlternateAddress(), 'json', $context);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Onboarding\Model\Business::class => false];
    }
}