<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Normalizer;

use NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\Account::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\AccountNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\AccountInstructions::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\AccountInstructionsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\Address::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\AddressNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\Applicant::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\ApplicantNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\Application::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\ApplicationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwner::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\BeneficialOwnerNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwnerIdentityDocument::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\BeneficialOwnerIdentityDocumentNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwnerAddress::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\BeneficialOwnerAddressNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\Business::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\BusinessNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\BusinessAddress::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\BusinessAddressNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\BusinessAlternateAddress::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\BusinessAlternateAddressNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\Cash::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\CashNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateDocumentRequest::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\CreateDocumentRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateReferralRequest::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\CreateReferralRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateReferralRequestBusiness::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\CreateReferralRequestBusinessNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\Document::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\DocumentNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\DomesticInstruction::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\DomesticInstructionNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\IdentityDocument::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\IdentityDocumentNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\Instruction::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\InstructionNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\InternationalInstruction::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\InternationalInstructionNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\Product::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\ProductNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\Referral::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\ReferralNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Onboarding\Model\ReferralPage::class => \NxSys\Library\Clients\Brex\API\Onboarding\Normalizer\ReferralPageNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\Account::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\AccountInstructions::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\Address::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\Applicant::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\Application::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwner::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwnerIdentityDocument::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\BeneficialOwnerAddress::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\Business::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\BusinessAddress::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\BusinessAlternateAddress::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\Cash::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateDocumentRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateReferralRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\CreateReferralRequestBusiness::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\Document::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\DomesticInstruction::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\IdentityDocument::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\Instruction::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\InternationalInstruction::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\Product::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\Referral::class => false,
            \NxSys\Library\Clients\Brex\API\Onboarding\Model\ReferralPage::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}