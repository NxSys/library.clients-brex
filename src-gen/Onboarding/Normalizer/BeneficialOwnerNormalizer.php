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
class BeneficialOwnerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwner::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwner::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwner();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('legal_name', $data)) {
            $object->setLegalName($data['legal_name']);
            unset($data['legal_name']);
        }
        if (\array_key_exists('company_relationship', $data)) {
            $object->setCompanyRelationship($data['company_relationship']);
            unset($data['company_relationship']);
        }
        if (\array_key_exists('date_of_birth', $data) && $data['date_of_birth'] !== null) {
            $object->setDateOfBirth(\DateTime::createFromFormat('Y-m-d', $data['date_of_birth'])->setTime(0, 0, 0));
            unset($data['date_of_birth']);
        }
        elseif (\array_key_exists('date_of_birth', $data) && $data['date_of_birth'] === null) {
            $object->setDateOfBirth(null);
        }
        if (\array_key_exists('identity_document', $data)) {
            $object->setIdentityDocument($this->denormalizer->denormalize($data['identity_document'], \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwnerIdentityDocument::class, 'json', $context));
            unset($data['identity_document']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwnerAddress::class, 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('prong', $data)) {
            $object->setProng($data['prong']);
            unset($data['prong']);
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
        $dataArray['legal_name'] = $data->getLegalName();
        if ($data->isInitialized('companyRelationship') && null !== $data->getCompanyRelationship()) {
            $dataArray['company_relationship'] = $data->getCompanyRelationship();
        }
        if ($data->isInitialized('dateOfBirth')) {
            $dataArray['date_of_birth'] = $data->getDateOfBirth()?->format('Y-m-d');
        }
        if ($data->isInitialized('identityDocument') && null !== $data->getIdentityDocument()) {
            $dataArray['identity_document'] = $this->normalizer->normalize($data->getIdentityDocument(), 'json', $context);
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        $dataArray['prong'] = $data->getProng();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwner::class => false];
    }
}