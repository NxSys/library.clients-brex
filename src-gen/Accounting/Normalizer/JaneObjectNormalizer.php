<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Normalizer;

use NxSys\Library\Clients\Brex\API\Accounting\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Accounting\Runtime\Normalizer\ValidatorTrait;
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
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\User::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\UserNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\Amount::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AmountNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\Integration::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\IntegrationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorDetails::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingErrorDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingErrorResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponseDetails::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingErrorResponseDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\Vendor::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\VendorNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingFieldValue::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingFieldValueNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordLineItem::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingRecordLineItemNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordLineItemAmount::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingRecordLineItemAmountNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordLineItemOriginalAmount::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingRecordLineItemOriginalAmountNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailed::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingRecordDetailedNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedAmount::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingRecordDetailedAmountNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedOriginalAmount::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingRecordDetailedOriginalAmountNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedUser::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingRecordDetailedUserNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedVendor::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingRecordDetailedVendorNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordsResponse::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\AccountingRecordsResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\Receipt::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\ReceiptNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\ExportResultsResponse::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\ExportResultsResponseNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\ReportExportResultsRequest::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\ReportExportResultsRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\ExportSuccessDetails::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\ExportSuccessDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\SuccessfulExportResult::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\SuccessfulExportResultNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\SuccessfulExportResultSuccess::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\SuccessfulExportResultSuccessNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\ExportFailureDetails::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\ExportFailureDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\FailedExportResult::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\FailedExportResultNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\FailedExportResultFailure::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\FailedExportResultFailureNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Accounting\Model\CreateIntegrationRequest::class => \NxSys\Library\Clients\Brex\API\Accounting\Normalizer\CreateIntegrationRequestNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Accounting\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \NxSys\Library\Clients\Brex\API\Accounting\Model\User::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\Amount::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\Integration::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponseDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\Vendor::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingFieldValue::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordLineItem::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordLineItemAmount::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordLineItemOriginalAmount::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailed::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedAmount::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedOriginalAmount::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedUser::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedVendor::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordsResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\Receipt::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\ExportResultsResponse::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\ReportExportResultsRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\ExportSuccessDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\SuccessfulExportResult::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\SuccessfulExportResultSuccess::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\ExportFailureDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\FailedExportResult::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\FailedExportResultFailure::class => false,
            \NxSys\Library\Clients\Brex\API\Accounting\Model\CreateIntegrationRequest::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}