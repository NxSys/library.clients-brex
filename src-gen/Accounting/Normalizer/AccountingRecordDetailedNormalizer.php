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
class AccountingRecordDetailedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailed::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailed::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailed();
        if (\array_key_exists('version', $data) && \is_int($data['version'])) {
            $data['version'] = (double) $data['version'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($this->denormalizer->denormalize($data['amount'], \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedAmount::class, 'json', $context));
            unset($data['amount']);
        }
        if (\array_key_exists('original_amount', $data) && $data['original_amount'] !== null) {
            $object->setOriginalAmount($this->denormalizer->denormalize($data['original_amount'], \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedOriginalAmount::class, 'json', $context));
            unset($data['original_amount']);
        }
        elseif (\array_key_exists('original_amount', $data) && $data['original_amount'] === null) {
            $object->setOriginalAmount(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('review_status', $data)) {
            $object->setReviewStatus($data['review_status']);
            unset($data['review_status']);
        }
        if (\array_key_exists('source_id', $data) && $data['source_id'] !== null) {
            $object->setSourceId($data['source_id']);
            unset($data['source_id']);
        }
        elseif (\array_key_exists('source_id', $data) && $data['source_id'] === null) {
            $object->setSourceId(null);
        }
        if (\array_key_exists('source_type', $data)) {
            $object->setSourceType($data['source_type']);
            unset($data['source_type']);
        }
        if (\array_key_exists('erp_posting_date', $data)) {
            $object->setErpPostingDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['erp_posting_date']));
            unset($data['erp_posting_date']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        if (\array_key_exists('receipts', $data) && $data['receipts'] !== null) {
            $values = [];
            foreach ($data['receipts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \NxSys\Library\Clients\Brex\API\Accounting\Model\Receipt::class, 'json', $context);
            }
            $object->setReceipts($values);
            unset($data['receipts']);
        }
        elseif (\array_key_exists('receipts', $data) && $data['receipts'] === null) {
            $object->setReceipts(null);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedUser::class, 'json', $context));
            unset($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('vendor', $data) && $data['vendor'] !== null) {
            $object->setVendor($this->denormalizer->denormalize($data['vendor'], \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedVendor::class, 'json', $context));
            unset($data['vendor']);
        }
        elseif (\array_key_exists('vendor', $data) && $data['vendor'] === null) {
            $object->setVendor(null);
        }
        if (\array_key_exists('memo', $data) && $data['memo'] !== null) {
            $object->setMemo($data['memo']);
            unset($data['memo']);
        }
        elseif (\array_key_exists('memo', $data) && $data['memo'] === null) {
            $object->setMemo(null);
        }
        if (\array_key_exists('posted_at', $data)) {
            $object->setPostedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['posted_at']));
            unset($data['posted_at']);
        }
        if (\array_key_exists('due_at', $data) && $data['due_at'] !== null) {
            $object->setDueAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['due_at']));
            unset($data['due_at']);
        }
        elseif (\array_key_exists('due_at', $data) && $data['due_at'] === null) {
            $object->setDueAt(null);
        }
        if (\array_key_exists('invoice_number', $data) && $data['invoice_number'] !== null) {
            $object->setInvoiceNumber($data['invoice_number']);
            unset($data['invoice_number']);
        }
        elseif (\array_key_exists('invoice_number', $data) && $data['invoice_number'] === null) {
            $object->setInvoiceNumber(null);
        }
        if (\array_key_exists('line_items', $data)) {
            $values_1 = [];
            foreach ($data['line_items'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordLineItem::class, 'json', $context);
            }
            $object->setLineItems($values_1);
            unset($data['line_items']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['amount'] = $this->normalizer->normalize($data->getAmount(), 'json', $context);
        if ($data->isInitialized('originalAmount')) {
            $dataArray['original_amount'] = $this->normalizer->normalize($data->getOriginalAmount(), 'json', $context);
        }
        $dataArray['type'] = $data->getType();
        $dataArray['review_status'] = $data->getReviewStatus();
        if ($data->isInitialized('sourceId')) {
            $dataArray['source_id'] = $data->getSourceId();
        }
        $dataArray['source_type'] = $data->getSourceType();
        $dataArray['erp_posting_date'] = $data->getErpPostingDate()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['version'] = $data->getVersion();
        if ($data->isInitialized('receipts')) {
            $values = [];
            foreach ($data->getReceipts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['receipts'] = $values;
        }
        if ($data->isInitialized('user')) {
            $dataArray['user'] = $this->normalizer->normalize($data->getUser(), 'json', $context);
        }
        if ($data->isInitialized('vendor')) {
            $dataArray['vendor'] = $this->normalizer->normalize($data->getVendor(), 'json', $context);
        }
        if ($data->isInitialized('memo')) {
            $dataArray['memo'] = $data->getMemo();
        }
        $dataArray['posted_at'] = $data->getPostedAt()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('dueAt')) {
            $dataArray['due_at'] = $data->getDueAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('invoiceNumber')) {
            $dataArray['invoice_number'] = $data->getInvoiceNumber();
        }
        $values_1 = [];
        foreach ($data->getLineItems() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['line_items'] = $values_1;
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailed::class => false];
    }
}