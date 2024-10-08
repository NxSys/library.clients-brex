<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Expenses\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Expenses\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Expenses\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ExpandableExpenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('memo', $data) && $data['memo'] !== null) {
                $object->setMemo($data['memo']);
                unset($data['memo']);
            } elseif (\array_key_exists('memo', $data) && $data['memo'] === null) {
                $object->setMemo(null);
            }
            if (\array_key_exists('location_id', $data) && $data['location_id'] !== null) {
                $object->setLocationId($data['location_id']);
                unset($data['location_id']);
            } elseif (\array_key_exists('location_id', $data) && $data['location_id'] === null) {
                $object->setLocationId(null);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($this->denormalizer->denormalize($data['location'], \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpenseLocation::class, 'json', $context));
                unset($data['location']);
            }
            if (\array_key_exists('department_id', $data) && $data['department_id'] !== null) {
                $object->setDepartmentId($data['department_id']);
                unset($data['department_id']);
            } elseif (\array_key_exists('department_id', $data) && $data['department_id'] === null) {
                $object->setDepartmentId(null);
            }
            if (\array_key_exists('department', $data)) {
                $object->setDepartment($this->denormalizer->denormalize($data['department'], \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpenseDepartment::class, 'json', $context));
                unset($data['department']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('category', $data)) {
                $object->setCategory($data['category']);
                unset($data['category']);
            }
            if (\array_key_exists('receipts', $data) && $data['receipts'] !== null) {
                $values = [];
                foreach ($data['receipts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \NxSys\Library\Clients\Brex\API\Expenses\Model\Receipt::class, 'json', $context);
                }
                $object->setReceipts($values);
                unset($data['receipts']);
            } elseif (\array_key_exists('receipts', $data) && $data['receipts'] === null) {
                $object->setReceipts(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            if ($object->isInitialized('memo') && null !== $object->getMemo()) {
                $data['memo'] = $object->getMemo();
            }
            if ($object->isInitialized('locationId') && null !== $object->getLocationId()) {
                $data['location_id'] = $object->getLocationId();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
            }
            if ($object->isInitialized('departmentId') && null !== $object->getDepartmentId()) {
                $data['department_id'] = $object->getDepartmentId();
            }
            if ($object->isInitialized('department') && null !== $object->getDepartment()) {
                $data['department'] = $this->normalizer->normalize($object->getDepartment(), 'json', $context);
            }
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('category') && null !== $object->getCategory()) {
                $data['category'] = $object->getCategory();
            }
            if ($object->isInitialized('receipts') && null !== $object->getReceipts()) {
                $values = [];
                foreach ($object->getReceipts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['receipts'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense::class => false];
        }
    }
} else {
    class ExpandableExpenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('memo', $data) && $data['memo'] !== null) {
                $object->setMemo($data['memo']);
                unset($data['memo']);
            } elseif (\array_key_exists('memo', $data) && $data['memo'] === null) {
                $object->setMemo(null);
            }
            if (\array_key_exists('location_id', $data) && $data['location_id'] !== null) {
                $object->setLocationId($data['location_id']);
                unset($data['location_id']);
            } elseif (\array_key_exists('location_id', $data) && $data['location_id'] === null) {
                $object->setLocationId(null);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($this->denormalizer->denormalize($data['location'], \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpenseLocation::class, 'json', $context));
                unset($data['location']);
            }
            if (\array_key_exists('department_id', $data) && $data['department_id'] !== null) {
                $object->setDepartmentId($data['department_id']);
                unset($data['department_id']);
            } elseif (\array_key_exists('department_id', $data) && $data['department_id'] === null) {
                $object->setDepartmentId(null);
            }
            if (\array_key_exists('department', $data)) {
                $object->setDepartment($this->denormalizer->denormalize($data['department'], \NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpenseDepartment::class, 'json', $context));
                unset($data['department']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('category', $data)) {
                $object->setCategory($data['category']);
                unset($data['category']);
            }
            if (\array_key_exists('receipts', $data) && $data['receipts'] !== null) {
                $values = [];
                foreach ($data['receipts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \NxSys\Library\Clients\Brex\API\Expenses\Model\Receipt::class, 'json', $context);
                }
                $object->setReceipts($values);
                unset($data['receipts']);
            } elseif (\array_key_exists('receipts', $data) && $data['receipts'] === null) {
                $object->setReceipts(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['id'] = $object->getId();
            if ($object->isInitialized('memo') && null !== $object->getMemo()) {
                $data['memo'] = $object->getMemo();
            }
            if ($object->isInitialized('locationId') && null !== $object->getLocationId()) {
                $data['location_id'] = $object->getLocationId();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
            }
            if ($object->isInitialized('departmentId') && null !== $object->getDepartmentId()) {
                $data['department_id'] = $object->getDepartmentId();
            }
            if ($object->isInitialized('department') && null !== $object->getDepartment()) {
                $data['department'] = $this->normalizer->normalize($object->getDepartment(), 'json', $context);
            }
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('category') && null !== $object->getCategory()) {
                $data['category'] = $object->getCategory();
            }
            if ($object->isInitialized('receipts') && null !== $object->getReceipts()) {
                $values = [];
                foreach ($object->getReceipts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['receipts'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\NxSys\Library\Clients\Brex\API\Expenses\Model\ExpandableExpense::class => false];
        }
    }
}
