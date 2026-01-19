<?php

namespace NxSys\Library\Clients\Brex\API\Transactions\Normalizer;

use NxSys\Library\Clients\Brex\API\Transactions\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Transactions\Runtime\Normalizer\ValidatorTrait;
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
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\CardAccount::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\CardAccountNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\CardAccountCurrentBalance::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\CardAccountCurrentBalanceNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\CardAccountAvailableBalance::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\CardAccountAvailableBalanceNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\CardAccountAccountLimit::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\CardAccountAccountLimitNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\CardTransaction::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\CardTransactionNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\CardTransactionMerchant::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\CardTransactionMerchantNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\CashAccount::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\CashAccountNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\CashTransaction::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\CashTransactionNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\CashTransactionAmount::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\CashTransactionAmountNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\MerchantData::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\MerchantDataNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\Money::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\MoneyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\PageCardTransaction::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\PageCardTransactionNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashAccount::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\PageCashAccountNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashTransaction::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\PageCashTransactionNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\PageStatement::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\PageStatementNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\Statement::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\StatementNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\StatementStartBalance::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\StatementStartBalanceNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\StatementEndBalance::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\StatementEndBalanceNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Transactions\Model\StatementPeriod::class => \NxSys\Library\Clients\Brex\API\Transactions\Normalizer\StatementPeriodNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Transactions\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \NxSys\Library\Clients\Brex\API\Transactions\Model\CardAccount::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\CardAccountCurrentBalance::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\CardAccountAvailableBalance::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\CardAccountAccountLimit::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\CardTransaction::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\CardTransactionMerchant::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\CashAccount::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\CashTransaction::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\CashTransactionAmount::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\MerchantData::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\Money::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\PageCardTransaction::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashAccount::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashTransaction::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\PageStatement::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\Statement::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\StatementStartBalance::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\StatementEndBalance::class => false,
            \NxSys\Library\Clients\Brex\API\Transactions\Model\StatementPeriod::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}