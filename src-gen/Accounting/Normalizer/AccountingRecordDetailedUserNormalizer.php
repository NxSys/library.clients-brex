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
class AccountingRecordDetailedUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedUser::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedUser::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedUser();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('first_name', $data)) {
            $object->setFirstName($data['first_name']);
            unset($data['first_name']);
        }
        if (\array_key_exists('last_name', $data)) {
            $object->setLastName($data['last_name']);
            unset($data['last_name']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($data['role']);
            unset($data['role']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('manager_id', $data)) {
            $object->setManagerId($data['manager_id']);
            unset($data['manager_id']);
        }
        if (\array_key_exists('department_id', $data)) {
            $object->setDepartmentId($data['department_id']);
            unset($data['department_id']);
        }
        if (\array_key_exists('department_name', $data)) {
            $object->setDepartmentName($data['department_name']);
            unset($data['department_name']);
        }
        if (\array_key_exists('location_id', $data)) {
            $object->setLocationId($data['location_id']);
            unset($data['location_id']);
        }
        if (\array_key_exists('location_name', $data)) {
            $object->setLocationName($data['location_name']);
            unset($data['location_name']);
        }
        if (\array_key_exists('title_id', $data)) {
            $object->setTitleId($data['title_id']);
            unset($data['title_id']);
        }
        if (\array_key_exists('title_name', $data)) {
            $object->setTitleName($data['title_name']);
            unset($data['title_name']);
        }
        if (\array_key_exists('manager_first_name', $data)) {
            $object->setManagerFirstName($data['manager_first_name']);
            unset($data['manager_first_name']);
        }
        if (\array_key_exists('manager_last_name', $data)) {
            $object->setManagerLastName($data['manager_last_name']);
            unset($data['manager_last_name']);
        }
        if (\array_key_exists('manager_title_id', $data)) {
            $object->setManagerTitleId($data['manager_title_id']);
            unset($data['manager_title_id']);
        }
        if (\array_key_exists('manager_title_name', $data)) {
            $object->setManagerTitleName($data['manager_title_name']);
            unset($data['manager_title_name']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['first_name'] = $data->getFirstName();
        $dataArray['last_name'] = $data->getLastName();
        $dataArray['email'] = $data->getEmail();
        $dataArray['role'] = $data->getRole();
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('managerId') && null !== $data->getManagerId()) {
            $dataArray['manager_id'] = $data->getManagerId();
        }
        if ($data->isInitialized('departmentId') && null !== $data->getDepartmentId()) {
            $dataArray['department_id'] = $data->getDepartmentId();
        }
        if ($data->isInitialized('departmentName') && null !== $data->getDepartmentName()) {
            $dataArray['department_name'] = $data->getDepartmentName();
        }
        if ($data->isInitialized('locationId') && null !== $data->getLocationId()) {
            $dataArray['location_id'] = $data->getLocationId();
        }
        if ($data->isInitialized('locationName') && null !== $data->getLocationName()) {
            $dataArray['location_name'] = $data->getLocationName();
        }
        if ($data->isInitialized('titleId') && null !== $data->getTitleId()) {
            $dataArray['title_id'] = $data->getTitleId();
        }
        if ($data->isInitialized('titleName') && null !== $data->getTitleName()) {
            $dataArray['title_name'] = $data->getTitleName();
        }
        if ($data->isInitialized('managerFirstName') && null !== $data->getManagerFirstName()) {
            $dataArray['manager_first_name'] = $data->getManagerFirstName();
        }
        if ($data->isInitialized('managerLastName') && null !== $data->getManagerLastName()) {
            $dataArray['manager_last_name'] = $data->getManagerLastName();
        }
        if ($data->isInitialized('managerTitleId') && null !== $data->getManagerTitleId()) {
            $dataArray['manager_title_id'] = $data->getManagerTitleId();
        }
        if ($data->isInitialized('managerTitleName') && null !== $data->getManagerTitleName()) {
            $dataArray['manager_title_name'] = $data->getManagerTitleName();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Accounting\Model\AccountingRecordDetailedUser::class => false];
    }
}