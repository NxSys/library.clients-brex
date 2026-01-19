<?php

namespace NxSys\Library\Clients\Brex\API\Payments\Normalizer;

use NxSys\Library\Clients\Brex\API\Payments\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Payments\Runtime\Normalizer\ValidatorTrait;
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
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\ACHDetailsRequest::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\ACHDetailsRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\ACHDetailsResponse::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\ACHDetailsResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\Address::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\AddressNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\Balance::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BalanceNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BankAccountDetailsResponse::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BankAccountDetailsResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BankAccountDetailsResponsebeneficiaryBank::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BankAccountDetailsResponsebeneficiaryBankNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BankConnectionNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnectionAvailableBalance::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BankConnectionAvailableBalanceNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnectionCurrentBalance::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BankConnectionCurrentBalanceNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BankDetails::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BankDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BeneficiaryBank::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BeneficiaryBankNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BeneficiaryBankAddress::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BeneficiaryBankAddressNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BookTransferDetails::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BookTransferDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BookTransferDetailsResponse::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BookTransferDetailsResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BrexCashAccountDetails::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BrexCashAccountDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BrexCashAccountDetailsResponse::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BrexCashAccountDetailsResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\BrexCashDetails::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\BrexCashDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\ChequeDetailsRequest::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\ChequeDetailsRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\ChequeDetailsResponse::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\ChequeDetailsResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\CounterPartyBankDetails::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\CounterPartyBankDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\CreateIncomingTransferRequest::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\CreateIncomingTransferRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\CreateTransferRequest::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\CreateTransferRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\CreateVendorRequest::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\CreateVendorRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\DomesticWireDetailsRequest::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\DomesticWireDetailsRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\DomesticWireDetailsResponse::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\DomesticWireDetailsResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\InternationalWireDetailsResponse::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\InternationalWireDetailsResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\Money::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\MoneyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\PageBankConnection::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\PageBankConnectionNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\PageTransfer::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\PageTransferNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\PageVendorResponse::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\PageVendorResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\PaymentAccountRequest::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\PaymentAccountRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\PaymentAccountResponse::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\PaymentAccountResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\Recipient::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\RecipientNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\Transfer::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\TransferNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\TransferCounterparty::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\TransferCounterpartyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\UpdateVendorRequest::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\UpdateVendorRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\VendorDetails::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\VendorDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\VendorDetailsResponse::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\VendorDetailsResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Payments\Model\VendorResponse::class => \NxSys\Library\Clients\Brex\API\Payments\Normalizer\VendorResponseNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Payments\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \NxSys\Library\Clients\Brex\API\Payments\Model\ACHDetailsRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\ACHDetailsResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\Address::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\Balance::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BankAccountDetailsResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BankAccountDetailsResponsebeneficiaryBank::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnection::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnectionAvailableBalance::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BankConnectionCurrentBalance::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BankDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BeneficiaryBank::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BeneficiaryBankAddress::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BookTransferDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BookTransferDetailsResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BrexCashAccountDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BrexCashAccountDetailsResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\BrexCashDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\ChequeDetailsRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\ChequeDetailsResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\CounterPartyBankDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\CreateIncomingTransferRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\CreateTransferRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\CreateVendorRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\DomesticWireDetailsRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\DomesticWireDetailsResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\InternationalWireDetailsResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\Money::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\PageBankConnection::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\PageTransfer::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\PageVendorResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\PaymentAccountRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\PaymentAccountResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\Recipient::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\Transfer::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\TransferCounterparty::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\UpdateVendorRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\VendorDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\VendorDetailsResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Payments\Model\VendorResponse::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}