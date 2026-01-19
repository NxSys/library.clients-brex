<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CashNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Onboarding\Model\Cash::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Onboarding\Model\Cash::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Onboarding\Model\Cash();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accounts', $data) && $data['accounts'] !== null) {
            $values = [];
            foreach ($data['accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \NxSys\Library\Clients\Brex\API\Onboarding\Model\Account::class, 'json', $context);
            }
            $object->setAccounts($values);
            unset($data['accounts']);
        }
        elseif (\array_key_exists('accounts', $data) && $data['accounts'] === null) {
            $object->setAccounts(null);
        }
        if (\array_key_exists('application', $data)) {
            $object->setApplication($this->denormalizer->denormalize($data['application'], \NxSys\Library\Clients\Brex\API\Onboarding\Model\Application::class, 'json', $context));
            unset($data['application']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('accounts')) {
            $values = [];
            foreach ($data->getAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['accounts'] = $values;
        }
        $dataArray['application'] = $this->normalizer->normalize($data->getApplication(), 'json', $context);
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Onboarding\Model\Cash::class => false];
    }
}