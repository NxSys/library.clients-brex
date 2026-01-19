<?php

namespace NxSys\Library\Clients\Brex\API\Accounting\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Accounting\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Accounting\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AccountingErrorResponseDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponseDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponseDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponseDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('existing_integration_id', $data)) {
            $object->setExistingIntegrationId($data['existing_integration_id']);
            unset($data['existing_integration_id']);
        }
        if (\array_key_exists('existing_vendor', $data)) {
            $object->setExistingVendor($data['existing_vendor']);
            unset($data['existing_vendor']);
        }
        if (\array_key_exists('requested_vendor', $data)) {
            $object->setRequestedVendor($data['requested_vendor']);
            unset($data['requested_vendor']);
        }
        if (\array_key_exists('integration_id', $data)) {
            $object->setIntegrationId($data['integration_id']);
            unset($data['integration_id']);
        }
        if (\array_key_exists('current_status', $data)) {
            $object->setCurrentStatus($data['current_status']);
            unset($data['current_status']);
        }
        if (\array_key_exists('duplicate_accounting_record_ids', $data)) {
            $values = [];
            foreach ($data['duplicate_accounting_record_ids'] as $value) {
                $values[] = $value;
            }
            $object->setDuplicateAccountingRecordIds($values);
            unset($data['duplicate_accounting_record_ids']);
        }
        if (\array_key_exists('not_ready_for_export_accounting_record_ids', $data)) {
            $values_1 = [];
            foreach ($data['not_ready_for_export_accounting_record_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNotReadyForExportAccountingRecordIds($values_1);
            unset($data['not_ready_for_export_accounting_record_ids']);
        }
        if (\array_key_exists('not_found_export_entry_source_ids', $data)) {
            $values_2 = [];
            foreach ($data['not_found_export_entry_source_ids'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setNotFoundExportEntrySourceIds($values_2);
            unset($data['not_found_export_entry_source_ids']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('existingIntegrationId') && null !== $data->getExistingIntegrationId()) {
            $dataArray['existing_integration_id'] = $data->getExistingIntegrationId();
        }
        if ($data->isInitialized('existingVendor') && null !== $data->getExistingVendor()) {
            $dataArray['existing_vendor'] = $data->getExistingVendor();
        }
        if ($data->isInitialized('requestedVendor') && null !== $data->getRequestedVendor()) {
            $dataArray['requested_vendor'] = $data->getRequestedVendor();
        }
        if ($data->isInitialized('integrationId') && null !== $data->getIntegrationId()) {
            $dataArray['integration_id'] = $data->getIntegrationId();
        }
        if ($data->isInitialized('currentStatus') && null !== $data->getCurrentStatus()) {
            $dataArray['current_status'] = $data->getCurrentStatus();
        }
        if ($data->isInitialized('duplicateAccountingRecordIds') && null !== $data->getDuplicateAccountingRecordIds()) {
            $values = [];
            foreach ($data->getDuplicateAccountingRecordIds() as $value) {
                $values[] = $value;
            }
            $dataArray['duplicate_accounting_record_ids'] = $values;
        }
        if ($data->isInitialized('notReadyForExportAccountingRecordIds') && null !== $data->getNotReadyForExportAccountingRecordIds()) {
            $values_1 = [];
            foreach ($data->getNotReadyForExportAccountingRecordIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['not_ready_for_export_accounting_record_ids'] = $values_1;
        }
        if ($data->isInitialized('notFoundExportEntrySourceIds') && null !== $data->getNotFoundExportEntrySourceIds()) {
            $values_2 = [];
            foreach ($data->getNotFoundExportEntrySourceIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['not_found_export_entry_source_ids'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingErrorResponseDetails::class => false];
    }
}