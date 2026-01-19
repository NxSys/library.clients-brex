<?php

namespace NxSys\Library\Clients\Brex\API\Transactions\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Transactions\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Transactions\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class StatementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Transactions\Model\Statement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Transactions\Model\Statement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Transactions\Model\Statement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('start_balance', $data)) {
            $object->setStartBalance($this->denormalizer->denormalize($data['start_balance'], \NxSys\Library\Clients\Brex\API\Transactions\Model\StatementStartBalance::class, 'json', $context));
            unset($data['start_balance']);
        }
        if (\array_key_exists('end_balance', $data)) {
            $object->setEndBalance($this->denormalizer->denormalize($data['end_balance'], \NxSys\Library\Clients\Brex\API\Transactions\Model\StatementEndBalance::class, 'json', $context));
            unset($data['end_balance']);
        }
        if (\array_key_exists('period', $data)) {
            $object->setPeriod($this->denormalizer->denormalize($data['period'], \NxSys\Library\Clients\Brex\API\Transactions\Model\StatementPeriod::class, 'json', $context));
            unset($data['period']);
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
        if ($data->isInitialized('startBalance') && null !== $data->getStartBalance()) {
            $dataArray['start_balance'] = $this->normalizer->normalize($data->getStartBalance(), 'json', $context);
        }
        if ($data->isInitialized('endBalance') && null !== $data->getEndBalance()) {
            $dataArray['end_balance'] = $this->normalizer->normalize($data->getEndBalance(), 'json', $context);
        }
        $dataArray['period'] = $this->normalizer->normalize($data->getPeriod(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Transactions\Model\Statement::class => false];
    }
}