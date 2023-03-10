<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Budgets\Normalizer;

use NxSys\Library\Clients\Brex\API\Budgets\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Budgets\Runtime\Normalizer\ValidatorTrait;
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
    protected $normalizers = ['NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Model\\Budget' => 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Normalizer\\BudgetNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Model\\BudgetLimit' => 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Normalizer\\BudgetLimitNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Model\\BudgetCurrentPeriodBalance' => 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Normalizer\\BudgetCurrentPeriodBalanceNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Model\\BudgetPeriodBalance' => 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Normalizer\\BudgetPeriodBalanceNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Model\\BudgetPeriodBalanceBalance' => 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Normalizer\\BudgetPeriodBalanceBalanceNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Model\\CreateBudgetRequest' => 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Normalizer\\CreateBudgetRequestNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Model\\Money' => 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Normalizer\\MoneyNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Model\\PageBudget' => 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Normalizer\\PageBudgetNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Model\\UpdateBudgetRequest' => 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Normalizer\\UpdateBudgetRequestNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Model\\UpdateBudgetRequestLimit' => 'NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Normalizer\\UpdateBudgetRequestLimitNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\NxSys\\Library\\Clients\\Brex\\API\\Budgets\\Runtime\\Normalizer\\ReferenceNormalizer'];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
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
}
