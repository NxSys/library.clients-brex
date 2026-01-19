<?php

namespace NxSys\Library\Clients\Brex\API\Team\Normalizer;

use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\ValidatorTrait;
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
        
        \NxSys\Library\Clients\Brex\API\Team\Model\Address::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\AddressNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\Card::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CardNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CardSpendControls::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CardSpendControlsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CardMailingAddress::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CardMailingAddressNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CardAttributePreferences::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CardAttributePreferencesNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CardExpiration::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CardExpirationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CardNumberResponse::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CardNumberResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CompanyResponse::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CompanyResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CreateCardRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CreateCardRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CreateCardRequestSpendControls::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CreateCardRequestSpendControlsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CreateCardRequestMailingAddress::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CreateCardRequestMailingAddressNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CreateCardRequestCardAttributePreferences::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CreateCardRequestCardAttributePreferencesNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CreateDepartmentRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CreateDepartmentRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CreateLocationRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CreateLocationRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\CreateUserRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\CreateUserRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\DepartmentResponse::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\DepartmentResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\LocationResponse::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\LocationResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\LockCardRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\LockCardRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\Money::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\MoneyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\PageCard::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\PageCardNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\PageDepartmentResponse::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\PageDepartmentResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\PageLocationResponse::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\PageLocationResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\PageUserResponse::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\PageUserResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\SecureEmailForCardDetailsRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\SecureEmailForCardDetailsRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\SetUserLimitRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\SetUserLimitRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\SetUserLimitRequestMonthlyLimit::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\SetUserLimitRequestMonthlyLimitNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\SpendControl::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\SpendControlNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\SpendControlRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\SpendControlRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\SpendControlUpdateRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\SpendControlUpdateRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\SpendControlUpdateRequestSpendLimit::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\SpendControlUpdateRequestSpendLimitNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\TerminateCardRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\TerminateCardRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\UpdateCardRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\UpdateCardRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\UpdateCardRequestSpendControls::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\UpdateCardRequestSpendControlsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\UpdateUserRequest::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\UpdateUserRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponse::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\UserLimitResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponseMonthlyLimit::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\UserLimitResponseMonthlyLimitNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponseMonthlyAvailable::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\UserLimitResponseMonthlyAvailableNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\UserOwner::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\UserOwnerNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Team\Model\UserResponse::class => \NxSys\Library\Clients\Brex\API\Team\Normalizer\UserResponseNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \NxSys\Library\Clients\Brex\API\Team\Model\Address::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\Card::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CardSpendControls::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CardMailingAddress::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CardAttributePreferences::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CardExpiration::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CardNumberResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CompanyResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CreateCardRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CreateCardRequestSpendControls::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CreateCardRequestMailingAddress::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CreateCardRequestCardAttributePreferences::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CreateDepartmentRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CreateLocationRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\CreateUserRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\DepartmentResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\LocationResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\LockCardRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\Money::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\PageCard::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\PageDepartmentResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\PageLocationResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\PageUserResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\SecureEmailForCardDetailsRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\SetUserLimitRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\SetUserLimitRequestMonthlyLimit::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\SpendControl::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\SpendControlRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\SpendControlUpdateRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\SpendControlUpdateRequestSpendLimit::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\TerminateCardRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\UpdateCardRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\UpdateCardRequestSpendControls::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\UpdateUserRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponseMonthlyLimit::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponseMonthlyAvailable::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\UserOwner::class => false,
            \NxSys\Library\Clients\Brex\API\Team\Model\UserResponse::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}