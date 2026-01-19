<?php

namespace NxSys\Library\Clients\Brex\API\Expenses\Normalizer;

use NxSys\Library\Clients\Brex\API\Expenses\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Expenses\Runtime\Normalizer\ValidatorTrait;
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
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\CreateAsyncFileUploadResponse::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\CreateAsyncFileUploadResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\Department::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\DepartmentNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\ExpandableExpenseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpenseLocation::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\ExpandableExpenseLocationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpenseDepartment::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\ExpandableExpenseDepartmentNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\Expense::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\ExpenseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\Location::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\LocationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\PageExpandableExpense::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\PageExpandableExpenseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\Receipt::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\ReceiptNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptMatchRequest::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\ReceiptMatchRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptUploadRequest::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\ReceiptUploadRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Expenses\Model\UpdateExpenseRequest::class => \NxSys\Library\Clients\Brex\API\Expenses\Normalizer\UpdateExpenseRequestNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Expenses\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \NxSys\Library\Clients\Brex\API\Expenses\Model\CreateAsyncFileUploadResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Expenses\Model\Department::class => false,
            \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense::class => false,
            \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpenseLocation::class => false,
            \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpenseDepartment::class => false,
            \NxSys\Library\Clients\Brex\API\Expenses\Model\Expense::class => false,
            \NxSys\Library\Clients\Brex\API\Expenses\Model\Location::class => false,
            \NxSys\Library\Clients\Brex\API\Expenses\Model\PageExpandableExpense::class => false,
            \NxSys\Library\Clients\Brex\API\Expenses\Model\Receipt::class => false,
            \NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptMatchRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Expenses\Model\ReceiptUploadRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Expenses\Model\UpdateExpenseRequest::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}