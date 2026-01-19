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
class PageCashTransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashTransaction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashTransaction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashTransaction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('next_cursor', $data) && $data['next_cursor'] !== null) {
            $object->setNextCursor($data['next_cursor']);
            unset($data['next_cursor']);
        }
        elseif (\array_key_exists('next_cursor', $data) && $data['next_cursor'] === null) {
            $object->setNextCursor(null);
        }
        if (\array_key_exists('items', $data)) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \NxSys\Library\Clients\Brex\API\Transactions\Model\CashTransaction::class, 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
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
        if ($data->isInitialized('nextCursor')) {
            $dataArray['next_cursor'] = $data->getNextCursor();
        }
        $values = [];
        foreach ($data->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['items'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashTransaction::class => false];
    }
}