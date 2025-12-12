<?php declare(strict_types = 1);

namespace Tests\Toolkit;

final class Codesniffer
{

	/**
	 * @param array<string, mixed> $output
	 * @return array<string, mixed>
	 */
	public static function normalize(array $output): array
	{
		if (!isset($output['files']) || !is_array($output['files'])) {
			return [
				'totals' => ['errors' => 0, 'warnings' => 0],
				'files' => [],
			];
		}

		$normalized = [
			'totals' => [
				'errors' => $output['totals']['errors'] ?? 0,
				'warnings' => $output['totals']['warnings'] ?? 0,
			],
			'files' => [],
		];

		$filePaths = array_keys($output['files']);
		sort($filePaths);

		foreach ($filePaths as $filePath) {
			$fileData = $output['files'][$filePath];
			$fileName = basename($filePath);
			$messages = [];

			foreach ($fileData['messages'] ?? [] as $message) {
				$messages[] = [
					'line' => $message['line'],
					'column' => $message['column'],
					'type' => $message['type'],
					'source' => $message['source'],
					'message' => $message['message'],
				];
			}

			usort($messages, static function (array $a, array $b): int {
				return $a['line'] !== $b['line']
					? $a['line'] <=> $b['line']
					: $a['column'] <=> $b['column'];
			});

			$normalized['files'][$fileName] = [
				'errors' => $fileData['errors'] ?? 0,
				'warnings' => $fileData['warnings'] ?? 0,
				'messages' => $messages,
			];
		}

		return $normalized;
	}

}
