<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Budgets\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Budgets\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Budgets\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class BudgetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Budgets\Model\Budget::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Budgets\Model\Budget::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Budgets\Model\Budget();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('budget_id', $data)) {
                $object->setBudgetId($data['budget_id']);
                unset($data['budget_id']);
            }
            if (\array_key_exists('account_id', $data)) {
                $object->setAccountId($data['account_id']);
                unset($data['account_id']);
            }
            if (\array_key_exists('creator_user_id', $data) && $data['creator_user_id'] !== null) {
                $object->setCreatorUserId($data['creator_user_id']);
                unset($data['creator_user_id']);
            } elseif (\array_key_exists('creator_user_id', $data) && $data['creator_user_id'] === null) {
                $object->setCreatorUserId(null);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('parent_budget_id', $data) && $data['parent_budget_id'] !== null) {
                $object->setParentBudgetId($data['parent_budget_id']);
                unset($data['parent_budget_id']);
            } elseif (\array_key_exists('parent_budget_id', $data) && $data['parent_budget_id'] === null) {
                $object->setParentBudgetId(null);
            }
            if (\array_key_exists('owner_user_ids', $data)) {
                $values = [];
                foreach ($data['owner_user_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setOwnerUserIds($values);
                unset($data['owner_user_ids']);
            }
            if (\array_key_exists('member_user_ids', $data)) {
                $values_1 = [];
                foreach ($data['member_user_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setMemberUserIds($values_1);
                unset($data['member_user_ids']);
            }
            if (\array_key_exists('period_type', $data)) {
                $object->setPeriodType($data['period_type']);
                unset($data['period_type']);
            }
            if (\array_key_exists('start_date', $data) && $data['start_date'] !== null) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
                unset($data['start_date']);
            } elseif (\array_key_exists('start_date', $data) && $data['start_date'] === null) {
                $object->setStartDate(null);
            }
            if (\array_key_exists('end_date', $data) && $data['end_date'] !== null) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['end_date'])->setTime(0, 0, 0));
                unset($data['end_date']);
            } elseif (\array_key_exists('end_date', $data) && $data['end_date'] === null) {
                $object->setEndDate(null);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($this->denormalizer->denormalize($data['limit'], \NxSys\Library\Clients\Brex\API\Budgets\Model\BudgetLimit::class, 'json', $context));
                unset($data['limit']);
            }
            if (\array_key_exists('budget_status', $data)) {
                $object->setBudgetStatus($data['budget_status']);
                unset($data['budget_status']);
            }
            if (\array_key_exists('limit_type', $data)) {
                $object->setLimitType($data['limit_type']);
                unset($data['limit_type']);
            }
            if (\array_key_exists('spend_type', $data)) {
                $object->setSpendType($data['spend_type']);
                unset($data['spend_type']);
            }
            if (\array_key_exists('current_period_balance', $data)) {
                $object->setCurrentPeriodBalance($this->denormalizer->denormalize($data['current_period_balance'], \NxSys\Library\Clients\Brex\API\Budgets\Model\BudgetCurrentPeriodBalance::class, 'json', $context));
                unset($data['current_period_balance']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('budgetId') && null !== $object->getBudgetId()) {
                $data['budget_id'] = $object->getBudgetId();
            }
            if ($object->isInitialized('accountId') && null !== $object->getAccountId()) {
                $data['account_id'] = $object->getAccountId();
            }
            if ($object->isInitialized('creatorUserId') && null !== $object->getCreatorUserId()) {
                $data['creator_user_id'] = $object->getCreatorUserId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('parentBudgetId') && null !== $object->getParentBudgetId()) {
                $data['parent_budget_id'] = $object->getParentBudgetId();
            }
            if ($object->isInitialized('ownerUserIds') && null !== $object->getOwnerUserIds()) {
                $values = [];
                foreach ($object->getOwnerUserIds() as $value) {
                    $values[] = $value;
                }
                $data['owner_user_ids'] = $values;
            }
            if ($object->isInitialized('memberUserIds') && null !== $object->getMemberUserIds()) {
                $values_1 = [];
                foreach ($object->getMemberUserIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['member_user_ids'] = $values_1;
            }
            $data['period_type'] = $object->getPeriodType();
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['start_date'] = $object->getStartDate()->format('Y-m-d');
            }
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['end_date'] = $object->getEndDate()->format('Y-m-d');
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $this->normalizer->normalize($object->getLimit(), 'json', $context);
            }
            $data['budget_status'] = $object->getBudgetStatus();
            if ($object->isInitialized('limitType') && null !== $object->getLimitType()) {
                $data['limit_type'] = $object->getLimitType();
            }
            $data['spend_type'] = $object->getSpendType();
            if ($object->isInitialized('currentPeriodBalance') && null !== $object->getCurrentPeriodBalance()) {
                $data['current_period_balance'] = $this->normalizer->normalize($object->getCurrentPeriodBalance(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\NxSys\Library\Clients\Brex\API\Budgets\Model\Budget::class => false];
        }
    }
} else {
    class BudgetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Budgets\Model\Budget::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Budgets\Model\Budget::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Budgets\Model\Budget();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('budget_id', $data)) {
                $object->setBudgetId($data['budget_id']);
                unset($data['budget_id']);
            }
            if (\array_key_exists('account_id', $data)) {
                $object->setAccountId($data['account_id']);
                unset($data['account_id']);
            }
            if (\array_key_exists('creator_user_id', $data) && $data['creator_user_id'] !== null) {
                $object->setCreatorUserId($data['creator_user_id']);
                unset($data['creator_user_id']);
            } elseif (\array_key_exists('creator_user_id', $data) && $data['creator_user_id'] === null) {
                $object->setCreatorUserId(null);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('parent_budget_id', $data) && $data['parent_budget_id'] !== null) {
                $object->setParentBudgetId($data['parent_budget_id']);
                unset($data['parent_budget_id']);
            } elseif (\array_key_exists('parent_budget_id', $data) && $data['parent_budget_id'] === null) {
                $object->setParentBudgetId(null);
            }
            if (\array_key_exists('owner_user_ids', $data)) {
                $values = [];
                foreach ($data['owner_user_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setOwnerUserIds($values);
                unset($data['owner_user_ids']);
            }
            if (\array_key_exists('member_user_ids', $data)) {
                $values_1 = [];
                foreach ($data['member_user_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setMemberUserIds($values_1);
                unset($data['member_user_ids']);
            }
            if (\array_key_exists('period_type', $data)) {
                $object->setPeriodType($data['period_type']);
                unset($data['period_type']);
            }
            if (\array_key_exists('start_date', $data) && $data['start_date'] !== null) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
                unset($data['start_date']);
            } elseif (\array_key_exists('start_date', $data) && $data['start_date'] === null) {
                $object->setStartDate(null);
            }
            if (\array_key_exists('end_date', $data) && $data['end_date'] !== null) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['end_date'])->setTime(0, 0, 0));
                unset($data['end_date']);
            } elseif (\array_key_exists('end_date', $data) && $data['end_date'] === null) {
                $object->setEndDate(null);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($this->denormalizer->denormalize($data['limit'], \NxSys\Library\Clients\Brex\API\Budgets\Model\BudgetLimit::class, 'json', $context));
                unset($data['limit']);
            }
            if (\array_key_exists('budget_status', $data)) {
                $object->setBudgetStatus($data['budget_status']);
                unset($data['budget_status']);
            }
            if (\array_key_exists('limit_type', $data)) {
                $object->setLimitType($data['limit_type']);
                unset($data['limit_type']);
            }
            if (\array_key_exists('spend_type', $data)) {
                $object->setSpendType($data['spend_type']);
                unset($data['spend_type']);
            }
            if (\array_key_exists('current_period_balance', $data)) {
                $object->setCurrentPeriodBalance($this->denormalizer->denormalize($data['current_period_balance'], \NxSys\Library\Clients\Brex\API\Budgets\Model\BudgetCurrentPeriodBalance::class, 'json', $context));
                unset($data['current_period_balance']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('budgetId') && null !== $object->getBudgetId()) {
                $data['budget_id'] = $object->getBudgetId();
            }
            if ($object->isInitialized('accountId') && null !== $object->getAccountId()) {
                $data['account_id'] = $object->getAccountId();
            }
            if ($object->isInitialized('creatorUserId') && null !== $object->getCreatorUserId()) {
                $data['creator_user_id'] = $object->getCreatorUserId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('parentBudgetId') && null !== $object->getParentBudgetId()) {
                $data['parent_budget_id'] = $object->getParentBudgetId();
            }
            if ($object->isInitialized('ownerUserIds') && null !== $object->getOwnerUserIds()) {
                $values = [];
                foreach ($object->getOwnerUserIds() as $value) {
                    $values[] = $value;
                }
                $data['owner_user_ids'] = $values;
            }
            if ($object->isInitialized('memberUserIds') && null !== $object->getMemberUserIds()) {
                $values_1 = [];
                foreach ($object->getMemberUserIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['member_user_ids'] = $values_1;
            }
            $data['period_type'] = $object->getPeriodType();
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['start_date'] = $object->getStartDate()->format('Y-m-d');
            }
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['end_date'] = $object->getEndDate()->format('Y-m-d');
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $this->normalizer->normalize($object->getLimit(), 'json', $context);
            }
            $data['budget_status'] = $object->getBudgetStatus();
            if ($object->isInitialized('limitType') && null !== $object->getLimitType()) {
                $data['limit_type'] = $object->getLimitType();
            }
            $data['spend_type'] = $object->getSpendType();
            if ($object->isInitialized('currentPeriodBalance') && null !== $object->getCurrentPeriodBalance()) {
                $data['current_period_balance'] = $this->normalizer->normalize($object->getCurrentPeriodBalance(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\NxSys\Library\Clients\Brex\API\Budgets\Model\Budget::class => false];
        }
    }
}
